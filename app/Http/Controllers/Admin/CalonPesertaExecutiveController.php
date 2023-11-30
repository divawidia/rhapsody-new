<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCalonPesertaExecutiveRequest;
use App\Http\Requests\EditCalonPesertaExecutiveRequest;
use App\Models\CalonPesertaExecutive;
use App\Models\Program;
use App\Models\ProgramContent;
use App\Models\ProgramExecutive;
use App\Models\Reference;
use App\Models\Testimony;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class CalonPesertaExecutiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = CalonPesertaExecutive::with(['program.program', 'references'])->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return $this->buttonTooltips(route('calon-peserta-executive.edit', $item->id), 'btn-primary', 'Edit Data Calon Peserta', 'bx-edit')
                        .' '.$this->formButtonTooltips(route('calon-peserta-executive.destroy', $item->id), 'btn-danger', 'Hapus Data Calon Peserta', 'bx-trash', 'DELETE');
                })
                ->addColumn('reference', function ($item) {
                    return $this->getReference($item);
                })
                ->addColumn('pengalaman_kerja', function ($item) {
                    return html_entity_decode($item->pengalaman_kerja);
                })
                ->editColumn('created_at', function ($item) {
                    return $this->convertDateTime($item->created_at);
                })
                ->editColumn('updated_at', function ($item) {
                    return $this->convertDateTime($item->updated_at);
                })
                ->rawColumns(['action', 'reference', 'created_at','updated_at', 'pengalaman_kerja'])
                ->addIndexColumn()
                ->make();
        }

        return view('pages.admin.calon-peserta-executive.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $program_executives = ProgramContent::whereRelation('program', 'name', 'Executive Program')->get();
        $references = Reference::all();
        $testimonies = Testimony::all();


        return view('pages.executive_registration', [
            'program_executives' => $program_executives,
            'references' => $references,
            'testimonies' => $testimonies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCalonPesertaExecutiveRequest $request)
    {
        $data = $request->validated();

        $calon_peserta = CalonPesertaExecutive::create($data);
        $calon_peserta->references()->attach($data['references']);

        Alert::success('Hore!', 'Pendaftaran anda sebagai calon peserta executive program berhasil!');
        return redirect()->route('registrasi-berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CalonPesertaExecutive $calon_peserta_executive)
    {
        return view('pages.admin.calon-peserta-executive.edit', [
            'peserta' => $calon_peserta_executive,
            'programs' => ProgramContent::whereRelation('program', 'name', 'Executive Program')->get(),
            'references' => Reference::all(),
            'referensiPeserta' => $calon_peserta_executive->references->pluck('id')->toArray()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditCalonPesertaExecutiveRequest $request, CalonPesertaExecutive $calon_peserta_executive)
    {
        $data = $request->validated();

        $calon_peserta_executive->update($data);
        $calon_peserta_executive->references()->sync($data['references']);

        $message = 'Data Calon Peserta : '.$calon_peserta_executive->nama_lengkap.' Berhasil Diperbarui!';
        Alert::success('Hore!', $message);
        return redirect()->route('calon-peserta-executive.index')->with('status', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CalonPesertaExecutive $calon_peserta_executive)
    {
        $calon_peserta_executive->delete();

        $message = 'Data Calon Peserta '.$calon_peserta_executive->nama_lengkap.' Berhasil dihapus!';
        Alert::success('Hore!', $message);
        return redirect()->route('calon-peserta-executive.index')->with('status', $message);
    }
}
