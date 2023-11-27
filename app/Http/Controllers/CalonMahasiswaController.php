<?php

namespace App\Http\Controllers;

use App\Models\CalonPesertaExecutive;
use App\Models\ProgramExecutive;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CalonMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = CalonPesertaExecutive::with(['program_executive']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="#">
                                        Sunting
                                    </a>
                                    <form action="#" method="POST">

                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.calon-peserta-executive');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $program_executives = ProgramExecutive::all();

        return view('pages.executive_registration', [
            'program_executives' => $program_executives
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['jenis_refrensi'] = implode(", ",$request->input('jenis_refrensi'));

        CalonPesertaExecutive::create($data);

        return redirect()->route('registrasi-berhasil');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
