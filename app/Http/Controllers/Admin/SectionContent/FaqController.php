<?php

namespace App\Http\Controllers\Admin\SectionContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Faq::latest()->get();;

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="' . route('faq.edit', $item->id) . '">Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="' . route('faq.destroy', $item->id) . '" data-confirm-delete="true">Hapus</a>
                                </li>
                            </ul>
                        </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }
        $title = 'Hapus Pertsanyaan!';
        $text = "Apakah anda yakin ingin menghapus pertanyaan ini?";
        confirmDelete($title, $text);

        return view('pages.admin.section-content.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.section-content.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqRequest $request)
    {
        $data = $request->validated();
        Faq::create($data);
        Alert::success('Hore!', 'Pertanyaan berhasil ditambahkan!');
        return redirect()->route('faq.index')->with('status', 'Data pertanyaan berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faq = Faq::findOrFail($id);

        return view('pages.admin.section-content.faq.edit',[
            'faq' => $faq
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FaqRequest $request, string $id)
    {
        $data = $request->validated();
        $faq = Faq::findOrFail($id);
        $faq->update($data);
        Alert::success('Hore!', 'Pertanyaan Berhasil Diupdate!');
        return redirect()->route('faq.index')->with('status', 'Data pertanyaan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimony = Faq::findOrFail($id);
        $testimony->delete();
        alert()->success('Hore!','Pertanyaan berhasil dihapus!');
        return redirect()->route('faq.index')->with('status', 'Data pertanyaan berhasil dihapus!');
    }
}
