<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        return view('pages.admin.calon-peserta-executive.index');
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
        $item = CalonPesertaExecutive::findOrFail($id);

        return view('pages.admin.calon-peserta-executive.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $item = CalonPesertaExecutive::findOrFail($id);
        $item->update($data);

        return redirect()->route('pages.admin.calon-peserta-executive.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = CalonPesertaExecutive::findOrFail($id);
        $item->delete();

        return redirect()->route('pages.admin.calon-peserta-executive.index');
    }
}
