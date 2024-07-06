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
    public function index(string $id)
    {
        if (request()->ajax()) {
            $query = ProgramCareerCompany::where('program_content_id', $id)->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="' . route('career-company.edit', ['pelatihan'=>$item->program_content_id, 'company'=>$item->id]) . '">Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="' . route('career-company.destroy',  ['pelatihan'=>$item->program_content_id, 'company'=>$item->id]) . '" data-confirm-delete="true">Hapus</a>
                                </li>
                            </ul>
                        </div>';
                })
                ->editColumn('company_logo', function ($item) {
                    return $item->company_logo ? '<img class="w-50" src="' . Storage::url($item->company_logo) . '"/>' : '';
                })
                ->editColumn('status', function ($item){
                    if ($item->status == 1) {
                        $badge = '<span class="badge bg-success">Available</span>';
                    }else{
                        $badge = '<span class="badge bg-danger">Limited</span>';
                    }
                    return $badge;
                })
                ->rawColumns(['action', 'company_logo', 'status'])
                ->make();
        }
        $title = 'Hapus Prospek Lowongan!';
        $text = "Apakah anda yakin ingin menghapus prospek lowongan ini?";
        confirmDelete($title, $text);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $pelatihan = ProgramContent::findOrFail($id);
        return view('pages.admin.section-content.program-career-company.create',[
            'pelatihan' => $pelatihan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProgramCareerCompanyRequest $request, ProgramContent $pelatihan)
    {
        $data = $request->all();
        $data['program_content_id'] = $pelatihan->id;
        $data['company_logo'] = $request->file('company_logo')->store('assets/program-page', 'public');
        ProgramCareerCompany::create($data);

        Alert::success('Hore!', 'Prospek Lowongan Perusahaan Berhasil Ditambahkan!');
        return redirect()->route('pelatihan.edit',$pelatihan->id)->with('status', 'Data prospek lowongan perusahaan berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgramContent $pelatihan, ProgramCareerCompany $company)
    {
        $company = ProgramCareerCompany::findOrFail($company->id);
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
        $careerCompany = ProgramCareerCompany::findOrFail($company->id);
        $careerCompany->update($data);
        Alert::success('Hore!', 'Prospek Lowongan Perusahaan Berhasil Diupdate!');
        return redirect()->route('pelatihan.edit', $pelatihan->id)->with('status', 'Data prospek lowongan perusahaan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramContent $pelatihan, ProgramCareerCompany $company)
    {
        $careerCompany = ProgramCareerCompany::findOrFail($company->id);
        $careerCompany->delete();
        alert()->success('Hore!','Prospek lowongan perusahaan berhasil dihapus!');
        return redirect()->route('pelatihan.edit', $pelatihan->id)->with('status', 'Data prospek lowongan perusahaan berhasil dihapus!');
    }
}
