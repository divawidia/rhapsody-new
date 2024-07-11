<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Models\ContactForm;
use Illuminate\Http\Request;
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
            $query = ContactForm::latest()->get();;
            return Datatables::of($query)
                ->editColumn('created_at', function ($item){
                    $date = strtotime($item->created_at);
                    return date('l, M d, Y - h:i A',$date);
                })
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
        ContactForm::create($data);
        Alert::success('Hore!', 'Pesan pertanyaan berhasil dikirim!');
        return redirect()->route('contact');
    }
}