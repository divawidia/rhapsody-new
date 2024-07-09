<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiswaSmaSmkRequest;
use App\Models\CalonPesertaDiploma;
use App\Models\CalonPesertaLuarBali;
use App\Models\JadwalSosialisasi;
use App\Models\ProgramDiploma;
use App\Models\Sekolah;
use App\Models\SiswaSmaSmk;
use App\Models\Testimony;
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
            $query = SiswaSmaSmk::with(['sekolah', 'sosialisasi']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-toolbar" role="toolbar">
                            <a class="btn btn-primary mx-1 my-1" href="' . route('siswa-sma-smk.edit', $item->id) . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                                <i class="bx bx-edit"></i>
                            </a>
                            <form action="' . route('siswa-sma-smk.destroy', $item->id) . '" method="POST" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus Data">
                                ' . method_field('delete') . csrf_field() . '
                                <button type="submit" class="btn btn-danger mx-1 my-1">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </form>
                        </div>';
                })
                ->editColumn('sosialisasi', function ($item){
                    return $item->sosialisasi->tanggal_sosialisasi . ', ' . $item->sosialisasi->sekolah->nama_sekolah;
                })
                ->editColumn('whatsapp', function ($item){
                    return '<a
                        href="https://wa.me/' . $item->no_hp .'"
                        class="btn btn-success mx-1 my-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Whatsapp"
                    ><i class="bx bxl-whatsapp"></i></a>';
                })
                ->rawColumns(['action', 'whatsapp', 'sosialisasi'])
                ->make();
        }

        return view('pages.admin.siswa-sma-smk.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function landing_page_create()
    {
        $testimonies = Testimony::all();
        return view('pages.landing_page_pendaftaran',[
            'testimonies' => $testimonies
        ]);
    }

    public function landing_page_luar_bali_create()
    {
        $testimonies = Testimony::all();
        return view('pages.landing-page-promo-luar-bali', [
            'testimonies' => $testimonies
        ]);
    }

    public function create()
    {
        $sekolahs = Sekolah::all();
        $sosialisasis = JadwalSosialisasi::all();

        return view('pages.admin.siswa-sma-smk.create', [
            'sekolahs' => $sekolahs,
            'sosialisasis' => $sosialisasis
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

        return redirect()->route('siswa-sma-smk.index')->with('status', 'Data siswa berhasil ditambahkan!');
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
        $sosialisasis = JadwalSosialisasi::all();

        return view('pages.admin.siswa-sma-smk.edit',[
            'item' => $item,
            'sekolahs' => $sekolahs,
            'sosialisasis' => $sosialisasis
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

        return redirect()->route('siswa-sma-smk.index')->with('status', 'Data siswa berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = SiswaSmaSmk::findorFail($id);
        $item->delete();

        return redirect()->route('siswa-sma-smk.index')->with('status', 'Data siswa berhasil dihapus!');
    }
}
