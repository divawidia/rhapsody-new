<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SosialisasiRequest;
use App\Models\JadwalSosialisasi;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use function Symfony\Component\Translation\t;

class JadwalSosialisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index ()
    {
        if (request()->ajax()) {
            $query = JadwalSosialisasi::with(['sekolah']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-toolbar" role="toolbar">
                            <a class="btn btn-primary mx-1 my-1" href="' . route('jadwal.edit', $item->id) . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                                <i class="bx bx-edit"></i>
                            </a>
                            <form action="' . route('jadwal.destroy', $item->id) . '" method="POST" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus Data">
                                ' . method_field('delete') . csrf_field() . '
                                <button type="submit" class="btn btn-danger mx-1 my-1">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </form>
                        </div>';
                })
                ->editColumn('tanggal_sosialisasi', function ($item){
                    $date = strtotime($item->tanggal_sosialisasi);
                    return date('l, M d, Y',$date);
                })
                ->editColumn('lama_sesi', function ($item){
                    return   $item->lama_sesi . ' Menit'  ;
                })
                ->editColumn('jam_sosialisasi', function ($item){
                    $time = strtotime($item->jam_sosialisasi);
                    return date('h:i A',$time);
                })
                ->editColumn('whatsapp', function ($item){
                    return '<a
                        href="https://wa.me/' . $item->sekolah->no_hp_wa .'"
                        class="btn btn-success mx-1 my-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Whatsapp"
                    ><i class="bx bxl-whatsapp"></i></a>';
                })
                ->editColumn('sekolah.google_maps', function ($item){
                    return '<a class="btn btn-primary mx-1 my-1" href="' . $item->sekolah->google_maps . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Google Maps">
                                <i class="bx bx-map"></i>
                            </a>';
                })
                ->editColumn('proyektor', function ($item){
                    if ($item->proyektor == 'Disediakan') {
                        $badge = '<span class="badge bg-success">' . $item->proyektor . '</span>';
                    }else{
                        $badge = '<span class="badge bg-warning">' . $item->proyektor . '</span>';
                    }
                    return $badge;
                })
                ->editColumn('speaker', function ($item){
                    if ($item->speaker == 'Disediakan') {
                        $badge = '<span class="badge bg-success">' . $item->speaker . '</span>';
                    }else{
                        $badge = '<span class="badge bg-warning">' . $item->speaker . '</span>';
                    }
                    return $badge;
                })
                ->editColumn('status_sosialisasi', function ($item){
                    if ($item->status_sosialisasi == 'Selesai') {
                        $badge = '<span class="badge bg-success">' . $item->status_sosialisasi . '</span>';
                    }elseif ($item->status_sosialisasi == 'Batal') {
                        $badge = '<span class="badge bg-danger">' . $item->status_sosialisasi . '</span>';
                    }elseif ($item->status_sosialisasi == 'Menunggu Jadwal') {
                        $badge = '<span class="badge bg-warning">' . $item->status_sosialisasi . '</span>';
                    }
                    else{
                        $badge = '<span class="badge bg-primary">' . $item->status_sosialisasi . '</span>';
                    }
                    return $badge;
                })
                ->editColumn('status_follup', function ($item){
                    if ($item->status_follup == 'Dibalas') {
                        $badge = '<span class="badge bg-success">' . $item->status_follup . '</span>';
                    }elseif ($item->status_follup == 'Hanya Dibaca') {
                        $badge = '<span class="badge bg-warning">' . $item->status_follup . '</span>';
                    }else{
                        $badge = '<span class="badge bg-primary">' . $item->status_follup . '</span>';
                    }
                    return $badge;
                })
                ->rawColumns(['action', 'tanggal_sosialisasi', 'whatsapp', 'sekolah.google_maps', 'proyektor', 'speaker', 'status_sosialisasi', 'status_follup'])
                ->make();
        }

        return view('pages.admin.jadwal-sosialisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sekolahs = Sekolah::all();
        return view('pages.admin.jadwal-sosialisasi.create', [
            'sekolahs' => $sekolahs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SosialisasiRequest $request)
    {
        $data = $request->all();
        JadwalSosialisasi::create($data);

        return redirect()->route('jadwal-sosialisasi.index')->with('status', 'Data jadwal sosialisasi berhasil ditambahkan!');
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
        $jadwal = JadwalSosialisasi::findOrFail($id);
        $sekolahs = Sekolah::all();

        return view('pages.admin.jadwal-sosialisasi.edit',[
            'jadwal' => $jadwal,
            'sekolahs' => $sekolahs
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        if ($request->has('proyektor')){
            $proyektor_status = $request->proyektor = 'Disediakan';
        }else{
            $proyektor_status = $request->proyektor = 'Tidak Disediakan';
        }

        if ($request->has('speaker')){
            $speaker_status = $request->speaker = 'Disediakan';
        }else{
            $speaker_status = $request->speaker = 'Tidak Disediakan';
        }
        $data['proyektor'] = $proyektor_status;
        $data['speaker'] = $speaker_status;

        $item = JadwalSosialisasi::findOrFail($id);
        $item->update($data);

        return redirect()->route('jadwal-sosialisasi.index')->with('status', 'Data jadwal sosialisasi berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = JadwalSosialisasi::findorFail($id);
        $item->delete();

        return redirect()->route('jadwal-sosialisasi.index')->with('status', 'Data jadwal sosialisasi berhasil dihapus!');
    }
}
