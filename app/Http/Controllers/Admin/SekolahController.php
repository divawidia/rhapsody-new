<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sekolah;
use App\Models\SiswaSmaSmk;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Sekolah::all();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-toolbar" role="toolbar">
                            <a class="btn btn-primary mx-1 my-1" href="' . route('sekolah-sosialisasi.edit', $item->id) . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                                <i class="bx bx-edit"></i>
                            </a>
                            <form action="' . route('sekolah-sosialisasi.destroy', $item->id) . '" method="POST">
                                ' . method_field('delete') . csrf_field() . '
                                <button type="submit" class="btn btn-danger mx-1 my-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus Data">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </form>
                        </div>';
                })
                ->editColumn('whatsapp', function ($item){
                    return '<a
                        href="https://wa.me/' . $item->no_hp_wa .'"
                        class="btn btn-success mx-1 my-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Whatsapp"
                    ><i class="bx bxl-whatsapp"></i></a>';
                })
                ->editColumn('google_maps', function ($item){
                    return '<a class="btn btn-primary mx-1 my-1" href="' . $item->google_maps . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Google Maps">
                                <i class="bx bx-map"></i>
                            </a>';
                })
                ->rawColumns(['action', 'whatsapp', 'google_maps'])
                ->make();
        }

        return view('pages.admin.sekolah-sosialisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.sekolah-sosialisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Sekolah::create($data);

        return redirect()->route('sekolah-sosialisasi.index')->with('status', 'Data sekolah SMA/SMK berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Sekolah::findOrFail($id);

        return view('pages.admin.sekolah-sosialisasi.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $item = Sekolah::findOrFail($id);
        $item->update($data);

        return redirect()->route('sekolah-sosialisasi.index')->with('status', 'Data sekolah berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Sekolah::findorFail($id);
        $item->delete();

        return redirect()->route('sekolah-sosialisasi.index')->with('status', 'Data sekolah berhasil dihapus!');
    }
}
