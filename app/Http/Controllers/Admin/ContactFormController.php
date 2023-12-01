<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\ContactForm;
use App\Models\User;
use App\Notifications\PertanyaanBaru;
use App\Notifications\PesertaDiplomaBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = ContactForm::latest()->get();
            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return $this->formButtonTooltips(route('contact-forms.destroy', $item->id), 'btn-danger', 'Hapus Data Pertanyaan', 'bx-trash', 'DELETE');
                })
                ->editColumn('created_at', function ($item){
                    return $this->convertDateTime($item->created_at);
                })
                ->editColumn('updated_at', function ($item){
                    return $this->convertDateTime($item->updated_at);
                })
                ->rawColumns(['action', 'created_at','updated_at'])
                ->addIndexColumn()
                ->make();
        }
        return view('pages.admin.contact-forms.index');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactFormRequest $request)
    {
        $data = $request->validated();
        $contact = ContactForm::create($data);

        Notification::send(User::all(), new PertanyaanBaru($contact));

        Alert::success('Hore!', 'Pesan pertanyaan berhasil dikirim!');
        return redirect()->route('contact');
    }

    public function destroy(ContactForm $contact)
    {
        $contact->delete();
        $message = 'Pesan pertanyaan berhasil dihapus!';
        Alert::success('Hore!', $message);
        return redirect()->route('contact-forms.index')->with('status', $message);
    }
}
