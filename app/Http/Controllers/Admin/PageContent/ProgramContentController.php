<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramContentRequest;
use App\Models\FacilityContent;
use App\Models\Faq;
use App\Models\Program;
use App\Models\ProgramCareerCompany;
use App\Models\ProgramCareerSalaries;
use App\Models\ProgramContent;
use App\Models\ProgramPhoto;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ProgramContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = ProgramContent::latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="' . route('pelatihan.edit', $item->id) . '">Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="' . route('pelatihan.destroy', $item->id) . '" data-confirm-delete="true">Hapus</a>
                                </li>
                            </ul>
                        </div>';
                })
                ->editColumn('price', function ($item){
                    return 'Rp. ' . number_format($item->price);
                })
                ->editColumn('status', function ($item){
                    if ($item->status == 1) {
                        $badge = '<span class="badge bg-success">Publish</span>';
                    }else{
                        $badge = '<span class="badge bg-danger">Private</span>';
                    }
                    return $badge;
                })
                ->rawColumns(['action', 'price', 'status'])
                ->make();
        }
//        $title = 'Hapus Program Pelatihan!';
//        $text = "Apakah anda yakin ingin menghapus program pelatihan ini?";
//        confirmDelete($title, $text);
//        return view('pages.admin.pages.programs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = Program::all();
        return view('pages.admin.section-content.programs.create', [
            'programs' => $programs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProgramContentRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['program_icon'] = $request->file('program_icon')->store('assets/program-page', 'public');
        $data['btn_icon'] = $request->file('btn_icon')->store('assets/program-page', 'public');
        $program = ProgramContent::create($data);
//        dd($request->photo_url);
        foreach ($request->photo_url as $image) {
            ProgramPhoto::create([
                'program_content_id' => $program->id,
                'photos_url' => $image,
                'alt' => $program->name
            ]);
        }

        Alert::success('Hore!', 'Program Berhasil Ditambahkan!');
        return redirect()->route('programs.index')->with('status', 'Data program berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $program = ProgramContent::with('program','program_photos', 'program_career_companies', 'program_career_salaries')->where('slug', $slug)->first();
        $start_date = date('d M, Y', strtotime($program->register_start));
        $end_date = date('d M, Y', strtotime($program->register_end));
        $faqs = Faq::all();
        $program_pelatihan = ProgramContent::with('program')->get()->all();
        $testimonies = Testimony::all();

        return view('pages.program-detail', [
            'program' => $program,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'faqs' => $faqs,
            'program_pelatihan' => $program_pelatihan,
            'testimonies' => $testimonies
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (request()->ajax()) {
            $query = ProgramCareerSalaries::where('program_content_id', $id)->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="' . route('prospek-karir.edit', ['pelatihan'=>$item->program_content_id, 'karir'=>$item->id]) . '">Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="' . route('prospek-karir.destroy',  ['pelatihan'=>$item->program_content_id, 'karir'=>$item->id]) . '" data-confirm-delete="true">Hapus</a>
                                </li>
                            </ul>
                        </div>';
                })
                ->editColumn('salary', function ($item){
                    return '$' . number_format($item->salary_start) . ' - $' . number_format($item->salary_end);
                })
                ->rawColumns(['action', 'salary'])
                ->make();
        }
        $title = 'Hapus Prospek Karir!';
        $text = "Apakah anda yakin ingin menghapus prospek karir ini?";
        confirmDelete($title, $text);

        $pelatihan = ProgramContent::with((['program_career_companies', 'program_career_salaries', 'program', 'program_photos']))->findOrFail($id);
        $programs = Program::all();

        return view('pages.admin.section-content.programs.edit',[
            'programs' => $programs,
            'pelatihan' => $pelatihan
        ]);
    }

    public function uploadPhoto(Request $request)
    {
        $name = [];
        foreach ($request->file('file') as $imageFile) {
            $image = $imageFile->store('assets/program-page', 'public');
            $name[] = $image;
        }

        return response()->json([
            'name'=> $name,
        ]);
    }

    public function deletePhoto(string $id)
    {
        $item = ProgramPhoto::findOrFail($id);
        if ($item) {
            $item->delete();
        }
        Storage::delete($item->photo_url);
        Alert::success('Hore!', 'Foto Berhasil Dihapus!');
        return redirect()->route('pelatihan.edit', $item->program_content_id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProgramContentRequest $request, ProgramContent $pelatihan)
    {
        $data = $request->validated();
        $programContent = ProgramContent::findOrFail($pelatihan->id);
        if ($request->btn_icon == null and $programContent->btn_icon != null){
            $data['btn_icon'] = $programContent->btn_icon;
        }else{
            $data['btn_icon'] = $request->file('btn_icon')->store('assets/program-page', 'public');
        }
        if ($request->program_icon == null and $programContent->program_icon != null){
            $data['program_icon'] = $programContent->program_icon;
        }else{
            $data['program_icon'] = $request->file('program_icon')->store('assets/program-page', 'public');
        }

        if ($request->photo_url != null) {
            foreach ($request->photo_url as $image) {
                ProgramPhoto::create([
                    'program_content_id' => $programContent->id,
                    'photos_url' => $image,
                    'alt' => $programContent->name
                ]);
            }
        }
        $programContent->update($data);
        Alert::success('Hore!', 'Program Pelatihan Berhasil Diedit!');
        return redirect()->route('pelatihan.edit', $programContent->id)->with('status', 'Data program pelatihan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = ProgramContent::findOrFail($id);
        $program->delete();
        alert()->success('Hore!','Program pelatihan berhasil dihapus!');

        return redirect()->route('programs.index')->with('status', 'Data program pelatihan berhasil dihapus!');
    }
}
