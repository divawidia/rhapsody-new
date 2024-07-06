<?php

namespace App\Http\Controllers\Admin\SectionContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlumnyCompanyRequest;
use App\Models\AlumnyCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class AlumnyCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = AlumnyCompany::latest()->get();;

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="' . route('company.edit', $item->id) . '">Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="' . route('company.destroy', $item->id) . '" data-confirm-delete="true">Hapus</a>
                                </li>
                            </ul>
                        </div>';
                })
                ->editColumn('company_logo_url', function ($item) {
                    return $item->company_logo_url ? '<img width="150" class="rounded-2" src="' . Storage::url($item->company_logo_url) . '"/>' : '';
                })
                ->rawColumns(['action', 'company_logo_url'])
                ->make();
        }
        $title = 'Hapus Perusahaan!';
        $text = "Apakah anda yakin ingin menghapus perusahaan ini?";
        confirmDelete($title, $text);

        return view('pages.admin.section-content.company.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.section-content.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlumnyCompanyRequest $request)
    {
        $data = $request->validated();
        $data['company_logo_alt'] = $data['name'];
        $data['company_logo_url'] = $request->file('company_logo_url')->store('assets/company-section', 'public');
        AlumnyCompany::create($data);
        Alert::success('Hore!', 'Perusahaan berhasil ditambahkan!');
        return redirect()->route('company.index')->with('status', 'Data perusahaan berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = AlumnyCompany::findOrFail($id);
        return view('pages.admin.section-content.company.edit',[
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlumnyCompanyRequest $request, string $id)
    {
        $data = $request->validated();
        $company = AlumnyCompany::findOrFail($id);
        $data['company_logo_alt'] = $data['name'];
        if ($request->company_logo_url == null and $company->company_logo_url != null){
            $data['company_logo_url'] = $company->company_logo_url;
        }else{
            $data['company_logo_url'] = $request->file('company_logo_url')->store('assets/company-section', 'public');
        }
        $company->update($data);
        Alert::success('Hore!', 'Perusahaan Berhasil Diupdate!');
        return redirect()->route('company.index')->with('status', 'Data perusahaan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimony = AlumnyCompany::findOrFail($id);
        $testimony->delete();
        alert()->success('Hore!','Perusahaan berhasil dihapus!');
        return redirect()->route('company.index')->with('status', 'Data perusahaan berhasil dihapus!');
    }
}
