<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramCareerCompanyRequest;
use App\Models\ProgramCareerCompany;
use App\Models\ProgramContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ProgramCareerCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProgramContent $pelatihan)
    {
        $query = ProgramCareerCompany::where('program_content_id', $pelatihan->id)->latest()->get();

        return Datatables::of($query)
            ->addColumn('action', function ($item) {
                return  $this->buttonTooltips(route('career-company.edit', ['pelatihan'=>$item->program_content_id, 'company'=>$item->id]), 'btn-primary', 'Edit Data perusahaan', 'bx-edit')
                    .' '.$this->formButtonTooltips(route('career-company.destroy', ['pelatihan'=>$item->program_content_id, 'company'=>$item->id]), 'btn-danger', 'Hapus Data perusahaan', 'bx-trash', 'DELETE');
            })
            ->editColumn('company_logo', function ($item) {
                return $item->company_logo ? '<img src="' . Storage::url($item->company_logo) . '" width="100"/>' : '';
            })
            ->editColumn('status', function ($item){
                return $this->status($item->status);
            })
            ->rawColumns(['action', 'company_logo', 'status'])
            ->make();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ProgramContent $pelatihan)
    {
        return view('pages.admin.section-content.program-career-company.create',[
            'pelatihan' => $pelatihan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProgramCareerCompanyRequest $request, ProgramContent $pelatihan)
    {
        $data = $request->validated();
        $data['company_logo'] = $request->file('company_logo')->store('assets/program-page', 'public');
        $pelatihan->program_career_companies()->create($data);

        Alert::success('Hore!', 'Prospek Lowongan Perusahaan Berhasil Ditambahkan!');
        return redirect()->route('pelatihan.edit',$pelatihan->id)->with('status', 'Data prospek lowongan perusahaan berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgramContent $pelatihan, ProgramCareerCompany $company)
    {
        return view('pages.admin.section-content.program-career-company.edit',[
            'company' => $company,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProgramCareerCompanyRequest $request, ProgramContent $pelatihan, ProgramCareerCompany $company)
    {
        $data = $request->validated();
        $data['company_logo'] = $request->file('company_logo')->store('assets/program-page', 'public');
        $company->update($data);
        Alert::success('Hore!', 'Prospek Lowongan Perusahaan Berhasil Diupdate!');
        return redirect()->route('pelatihan.edit', $pelatihan->id)->with('status', 'Data prospek lowongan perusahaan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramContent $pelatihan, ProgramCareerCompany $company)
    {
        $company->delete();
        alert()->success('Hore!','Prospek lowongan perusahaan berhasil dihapus!');
        return redirect()->route('pelatihan.edit', $pelatihan->id)->with('status', 'Data prospek lowongan perusahaan berhasil dihapus!');
    }
}
