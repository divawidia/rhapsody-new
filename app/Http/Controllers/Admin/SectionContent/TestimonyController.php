<?php

namespace App\Http\Controllers\Admin\SectionContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonyRequest;
use App\Models\Testimony;
use Illuminate\Support\Facades\Storage;
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
                                    <a class="dropdown-item" href="' . route('testimoni.edit', $item->id) . '">Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="' . route('testimoni.destroy', $item->id) . '" data-confirm-delete="true">Hapus</a>
                                </li>
                            </ul>
                        </div>';
                })
                ->editColumn('photo_url', function ($item) {
                    return $item->photo_url ? '<img width="150" class="rounded-2" src="' . Storage::url($item->photo_url) . '"/>' : '';
                })
                ->rawColumns(['action', 'photo_url'])
                ->make();
        }
        $title = 'Hapus Testimoni!';
        $text = "Apakah anda yakin ingin menghapus testimoni ini?";
        confirmDelete($title, $text);

        return view('pages.admin.section-content.testimony.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.section-content.testimony.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonyRequest $request)
    {
        $data = $request->validated();
        $data['photo_url'] = $request->file('photo_url')->store('assets/testimony-section', 'public');
        Testimony::create($data);
        Alert::success('Hore!', 'Testimony berhasil dibuat!');
        return redirect()->route('testimoni.index')->with('status', 'Data testimony berhasil dibuat!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimony = Testimony::findOrFail($id);

        return view('pages.admin.section-content.testimony.edit',[
            'testimoni' => $testimony
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonyRequest $request, string $id)
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
        return redirect()->route('testimoni.index')->with('status', 'Data testimoni berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimony = Testimony::findOrFail($id);
        $testimony->delete();
        alert()->success('Hore!','Testimoni berhasil dihapus!');
        return redirect()->route('testimoni.index')->with('status', 'Data testimoni berhasil dihapus!');
    }
}
