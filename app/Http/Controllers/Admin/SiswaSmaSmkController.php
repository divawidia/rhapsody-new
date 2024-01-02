<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiswaSmaSmkRequest;
use App\Models\CalonPesertaDiploma;
use App\Models\CalonPesertaLuarBali;
use App\Models\ProgramDiploma;
use App\Models\Sekolah;
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
            $query = SiswaSmaSmk::with(['sekolah']);

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
                ->editColumn('whatsapp', function ($item){
                    return '<a
                        href="https://wa.me/' . $item->no_hp .'"
                        class="btn btn-success mx-1 my-1"
                    ><i class="bx bxl-whatsapp"></i></a>';
                })
                ->rawColumns(['action', 'whatsapp'])
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

    public function landing_page_luar_bali_create()
    {
        return view('pages.landing-page-promo-luar-bali');
    }

    public function create()
    {
        $sekolahs = Sekolah::all();

        return view('pages.admin.siswa-sma-smk.create', [
            'sekolahs' => $sekolahs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function landing_page_store(SiswaSmaSmkRequest $request)
    {
        $data = $request->all();
        SiswaSmaSmk::create($data);

        return redirect()->route('landing-page')->with('status', 'Absensi berhasil disubmit!');
    }

    public function landing_page_luar_bali_store(SiswaSmaSmkRequest $request)
    {
        $data = $request->all();
        CalonPesertaLuarBali::create($data);

        return redirect()->route('promo-luar-bali')->with('status', 'Data berhasil disubmit!');
    }

    public function store(SiswaSmaSmkRequest $request)
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
        $sekolahs = Sekolah::all();

        return view('pages.admin.siswa-sma-smk.edit',[
            'item' => $item,
            'sekolahs' => $sekolahs
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SiswaSmaSmkRequest $request, string $id)
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
