<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CalonPesertaDiploma;
use App\Models\CalonPesertaExecutive;
use App\Models\Program;
use App\Models\ProgramDiploma;
use App\Models\Reference;
use App\Models\Testimony;
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
            $query = CalonPesertaDiploma::with(['program.program', 'references'])->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return $this->buttonTooltips(route('calon-peserta-diploma.edit', $item->id), 'btn-primary', 'Edit Data Calon Peserta', 'bx-edit')
                        .' '.$this->formButtonTooltips(route('calon-peserta-diploma.destroy', $item->id), 'btn-danger', 'Hapus Data Calon Peserta', 'bx-trash', 'DELETE');
                })
                ->addColumn('reference', function ($item) {
                    $data = '';
                    foreach ($item->references as $reference) {
                        $data .= '('.$reference->jenis.')';
                    }
                    return $data;
                })
                ->editColumn('created_at', function ($item) {
                    return $this->convertDateTime($item->created_at);
                })
                ->editColumn('updated_at', function ($item) {
                    return $this->convertDateTime($item->updated_at);
                })
                ->rawColumns(['action', 'reference', 'created_at','updated_at'])
                ->addIndexColumn()
                ->make();
        }

        return view('pages.admin.calon-peserta-diploma.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan_diplomas = ProgramDiploma::all();
        $references = Reference::all();
        $testimonies = Testimony::all();
        $programs = Program::with('program_contents')->get()->all();

        return view('pages.d1_registration', [
            'jurusan_diplomas' => $jurusan_diplomas,
            'references' => $references,
            'testimonies' => $testimonies,
            'programs' => $programs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $calon_peserta = CalonPesertaDiploma::create($data);
        $calon_peserta->references()->sync((array)$request->input('reference_id'));

        return redirect()->route('registrasi-berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = CalonPesertaDiploma::findOrFail($id);

        return view('pages.admin.calon-peserta-diploma.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $item = CalonPesertaDiploma::findOrFail($id);
        $item->update($data);

        return redirect()->route('pages.admin.calon-peserta-diploma.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = CalonPesertaDiploma::findOrFail($id);
        $item->delete();

        return redirect()->route('pages.admin.calon-peserta-diploma.index');
    }
}
