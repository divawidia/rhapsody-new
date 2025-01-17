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
        $query = ProgramContent::latest()->get();

        return Datatables::of($query)
            ->addColumn('action', function ($item) {
                return  $this->buttonTooltips(route('pelatihan.edit', $item->id), 'btn-primary', 'Edit Data Pelatihan', 'bx-edit')
                    .' '.$this->formButtonTooltips(route('pelatihan.destroy', $item->id), 'btn-danger', 'Hapus Data Pelatihan', 'bx-trash', 'DELETE');
            })
            ->editColumn('price', function ($item){
                return 'Rp. ' . number_format($item->price);
            })
            ->editColumn('status', function ($item){
                return $this->status($item->status);
            })
            ->rawColumns(['action', 'price', 'status'])
            ->make();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.section-content.programs.create', [
            'programs' => Program::where('status', 1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProgramContentRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->name);
        $data['program_icon'] = $this->storeFile($data, 'program_icon', 'assets/program-page', '');
        $data['btn_icon'] = $this->storeFile($data, 'btn_icon', 'assets/program-page', '');
        $program = ProgramContent::create($data);
        foreach ($request->photo_url as $image) {
            $program->program_photos()->create([
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
        $program_pelatihan = ProgramContent::with('program')->get();
        $programs = Program::with('program_contents')->get();

        return view('pages.program-detail', [
            'program' => $program,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'faqs' => $faqs,
            'program_pelatihan' => $program_pelatihan,
            'programs' => $programs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgramContent $pelatihan)
    {
        if (request()->ajax()) {
            $query = $pelatihan->program_career_salaries()->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return $this->buttonTooltips(route('prospek-karir.edit', ['pelatihan'=>$item->program_content_id, 'karir'=>$item->id]), 'btn-primary', 'Edit Data prospek karir', 'bx-edit')
                        .' '.$this->formButtonTooltips(route('prospek-karir.destroy',  ['pelatihan'=>$item->program_content_id, 'karir'=>$item->id]), 'btn-danger', 'Hapus Data rospek karir', 'bx-trash', 'DELETE');
                })
                ->editColumn('salary', function ($item){
                    return '$' . number_format($item->salary_start) . ' - $' . number_format($item->salary_end);
                })
                ->rawColumns(['action', 'salary'])
                ->make();
        }
        $programs = Program::where('status', '1')->get();

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
            Storage::delete($item->photos_url);
            $item->delete();
        }

        Alert::success('Hore!', 'Foto Berhasil Dihapus!');
        return redirect()->route('pelatihan.edit', $item->program_content_id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProgramContentRequest $request, ProgramContent $pelatihan)
    {
        $data = $request->validated();
        $data['btn_icon'] = $this->updateFile($data, 'btn_icon', 'assets/program-page', $pelatihan->btn_icon);
        $data['program_icon'] = $this->updateFile($data, 'program_icon', 'assets/program-page', $pelatihan->program_icon);

        if ($request->photo_url != null) {
            foreach ($request->photo_url as $image) {
                $pelatihan->program_photos()->create([
                    'photos_url' => $image,
                    'alt' => $pelatihan->name
                ]);
            }
        }
        $pelatihan->update($data);
        Alert::success('Hore!', 'Program Pelatihan Berhasil Diedit!');
        return redirect()->route('pelatihan.edit', $pelatihan->id)->with('status', 'Data program pelatihan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramContent $pelatihan)
    {
        $pelatihan->delete();
        alert()->success('Hore!','Program pelatihan berhasil dihapus!');
        return redirect()->route('programs.index')->with('status', 'Data program pelatihan berhasil dihapus!');
    }
}
