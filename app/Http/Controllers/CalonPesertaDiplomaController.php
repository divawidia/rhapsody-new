<?php

namespace App\Http\Controllers;

use App\Models\CalonPesertaDiploma;
use App\Models\CalonPesertaExecutive;
use App\Models\ProgramDiploma;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CalonPesertaDiplomaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = CalonPesertaDiploma::with(['jurusan_diploma']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                            <button class="btn btn-primary mx-1 my-1"
                                type="button" id="action' .  $item->id . '">
                                    Edit
                            </button>
                            <button class="btn btn-danger mx-1 my-1"
                                type="button" id="action' .  $item->id . '">
                                    Delete
                            </button>';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.calon-peserta-diploma');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan_diplomas = ProgramDiploma::all();

        return view('pages.d1_registration', [
            'jurusan_diplomas' => $jurusan_diplomas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['jenis_refrensi'] = implode(", ",$request->input('jenis_refrensi'));

        CalonPesertaDiploma::create($data);

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
