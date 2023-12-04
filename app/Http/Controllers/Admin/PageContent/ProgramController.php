<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramRequest;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Program::latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return  $this->buttonTooltips(route('programs.edit', $item->id), 'btn-primary', 'Edit Data programs', 'bx-edit')
                        .' '.$this->formButtonTooltips(route('programs.destroy', $item->id), 'btn-danger', 'Hapus Data programs', 'bx-trash', 'DELETE');
                })
                ->editColumn('status', function ($item){
                    if ($item->status == 1) {
                        $badge = '<span class="badge bg-success">Publish</span>';
                    }else{
                        $badge = '<span class="badge bg-danger">Private</span>';
                    }
                    return $badge;
                })
                ->rawColumns(['action', 'status'])
                ->make();
        }
        return view('pages.admin.pages.programs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.pages.programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProgramRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->name);

        Program::create($data);
        Alert::success('Hore!', 'Program berhasil ditambahkan!');
        return redirect()->route('programs.index')->with('status', 'Data program berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $program = Program::find($id);
        return view('pages.admin.pages.programs.edit', ['program'=>$program]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProgramRequest $request, Program $program)
    {
        $data = $request->validated();
        $program = Program::findOrFail($program->id);
        $data['slug'] = Str::slug($request->name);
        $program->update($data);
        alert()->success('Hore!','Program berhasil diupdate!');
        return redirect()->route('programs.index')->with('status', 'Data program berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = Program::findOrFail($id);
        $program->delete();
        alert()->success('Hore!','Program berhasil dihapus!');

        return redirect()->route('programs.index')->with('status', 'Data Program berhasil dihapus!');
    }
}
