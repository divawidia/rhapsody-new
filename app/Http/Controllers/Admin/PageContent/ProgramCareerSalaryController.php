<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramCareerSalaryRequest;
use App\Models\ProgramCareerSalaries;
use App\Models\ProgramContent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ProgramCareerSalaryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $pelatihan = ProgramContent::findOrFail($id);
        return view('pages.admin.section-content.program-career-salaries.create',[
            'pelatihan' => $pelatihan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProgramCareerSalaryRequest $request, ProgramContent $pelatihan)
    {
        $data = $request->all();
        $data['program_content_id'] = $pelatihan->id;
        ProgramCareerSalaries::create($data);

        Alert::success('Hore!', 'Prospek Karir Berhasil Ditambahkan!');
        return redirect()->route('pelatihan.edit',$pelatihan->id)->with('status', 'Data prospek karir berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgramContent $pelatihan, ProgramCareerSalaries $karir)
    {
        $karir = ProgramCareerSalaries::findOrFail($karir->id);
        return view('pages.admin.section-content.program-career-salaries.edit',[
            'karir' => $karir,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProgramCareerSalaryRequest $request, ProgramContent $pelatihan, ProgramCareerSalaries $karir)
    {
        $data = $request->validated();
        $careerSalary = ProgramCareerSalaries::findOrFail($karir->id);
        $careerSalary->update($data);
        Alert::success('Hore!', 'Prospek Karir Berhasil Diupdate!');
        return redirect()->route('pelatihan.edit', $pelatihan->id)->with('status', 'Data prospek karir berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramContent $pelatihan, ProgramCareerSalaries $karir)
    {
        $careerSalary = ProgramCareerSalaries::findOrFail($karir->id);
        $careerSalary->delete();
        alert()->success('Hore!','Prospek karir berhasil dihapus!');
        return redirect()->route('pelatihan.edit', $pelatihan->id)->with('status', 'Data prospek karir berhasil dihapus!');
    }
}
