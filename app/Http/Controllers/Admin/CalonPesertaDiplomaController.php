<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCalonPesertaDiplomaRequest;
use App\Http\Requests\EditCalonPesertaDiplomaRequest;
use App\Models\CalonPesertaDiploma;
use App\Models\ProgramContent;
use App\Models\Reference;
use App\Models\Testimony;
use RealRashid\SweetAlert\Facades\Alert;
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
        $jurusan_diplomas = ProgramContent::whereRelation('program', 'name', 'Diploma 1')->get();
        $references = Reference::all();
        $testimonies = Testimony::all();

        return view('pages.d1_registration', [
            'jurusan_diplomas' => $jurusan_diplomas,
            'references' => $references,
            'testimonies' => $testimonies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCalonPesertaDiplomaRequest $request)
    {
        $data = $request->validated();

        $calon_peserta = CalonPesertaDiploma::create($data);
        $calon_peserta->references()->attach($data['references']);

        $message = 'Pendaftaran anda sebagai calon peserta diploma 1 berhasil!';
        Alert::success('Hore!', $message);
        return redirect()->route('registrasi-berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CalonPesertaDiploma $calon_peserta_diploma)
    {
        return view('pages.admin.calon-peserta-diploma.edit', [
            'peserta' => $calon_peserta_diploma,
            'programs' => ProgramContent::whereRelation('program', 'name', 'Diploma 1')->get(),
            'references' => Reference::all(),
            'referensiPeserta' => $calon_peserta_diploma->references->pluck('id')->toArray()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditCalonPesertaDiplomaRequest $request, CalonPesertaDiploma $calon_peserta_diploma)
    {
        $data = $request->validated();

        $calon_peserta_diploma->update($data);
        $calon_peserta_diploma->references()->sync($data['references']);

        $message = 'Data Calon Peserta '.$calon_peserta_diploma->nama_lengkap.' Berhasil Diperbarui!';
        Alert::success('Hore!', $message);
        return redirect()->route('calon-peserta-diploma.index')->with('status', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CalonPesertaDiploma $calon_peserta_diploma)
    {
        $calon_peserta_diploma->delete();

        $message = 'Data Calon Peserta '.$calon_peserta_diploma->nama_lengkap.' Berhasil dihapus!';
        Alert::success('Hore!', $message);
        return redirect()->route('calon-peserta-diploma.index')->with('status', $message);
    }
}
