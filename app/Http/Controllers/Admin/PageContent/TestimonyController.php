<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Testimony::latest()->get();;

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="' . route('categories.edit', $item->id) . '">Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="' . route('categories.destroy', $item->id) . '" data-confirm-delete="true">Hapus</a>
                                </li>
                            </ul>
                        </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }
        $title = 'Hapus Testimoni!';
        $text = "Apakah anda yakin ingin menghapus testimoni ini?";
        confirmDelete($title, $text);

        return view('pages.admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validated();
        $data['photo_url'] = $request->file('photo_url')->store('assets/testimony-section', 'public');
        Testimony::create($data);
        Alert::success('Hore!', 'Testimony berhasil dibuat!');
        return redirect()->route('categories.index')->with('status', 'Data testimony berhasil dibuat!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimony = Testimony::findOrFail($id);

        return view('pages.admin.section-content.programs.edit',[
            'testimony' => $testimony
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validated();
        $testimony = Testimony::findOrFail($id);
        if ($request->photo_url == null and $testimony->photo_url != null){
            $data['photo_url'] = $testimony->photo_url;
        }else{
            $data['photo_url'] = $request->file('photo_url')->store('assets/testimony-section', 'public');
        }
        $testimony->update($data);
        Alert::success('Hore!', 'Testimoni Berhasil Diupdate!');
        return redirect()->route('pelatihan.edit', $testimony->id)->with('status', 'Data testimoni berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimony = Testimony::findOrFail($id);
        $testimony->delete();
        alert()->success('Hore!','Testimoni berhasil dihapus!');
        return redirect()->route('programs.index')->with('status', 'Data testimoni berhasil dihapus!');
    }
}
