<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CalonPesertaDiploma;
use App\Models\SiswaSmaSmk;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SiswaSmaSmkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = SiswaSmaSmk::all();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-toolbar" role="toolbar">
                            <a class="btn btn-primary mx-1 my-1" href="' . route('siswa-sma-smk-sosialisasi.edit', $item->id) . '">
                                Edit
                            </a>
                            <form action="' . route('siswa-sma-smk-sosialisasi.destroy', $item->id) . '" method="POST">
                                ' . method_field('delete') . csrf_field() . '
                                <button type="submit" class="btn btn-danger mx-1 my-1">
                                    Hapus
                                </button>
                            </form>
                        </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.siswa-sma-smk.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function landing_page_create()
    {
        return view('pages.landing_page_pendaftaran');
    }

    public function create()
    {
        return view('pages.admin.siswa-sma-smk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function landing_page_store(Request $request)
    {
        $data = $request->all();
        SiswaSmaSmk::create($data);

        return redirect()->route('landing-page')->with('status', 'Absensi berhasil disubmit!');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        SiswaSmaSmk::create($data);

        return redirect()->route('siswa-sma-smk-sosialisasi.index')->with('status', 'Data siswa berhasil ditambahkan!');
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
        $item = SiswaSmaSmk::findOrFail($id);

        return view('pages.admin.siswa-sma-smk.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $item = SiswaSmaSmk::findOrFail($id);
        $item->update($data);

        return redirect()->route('siswa-sma-smk-sosialisasi.index')->with('status', 'Data siswa berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = SiswaSmaSmk::findorFail($id);
        $item->delete();

        return redirect()->route('siswa-sma-smk-sosialisasi.index')->with('status', 'Data siswa berhasil dihapus!');
    }
}
