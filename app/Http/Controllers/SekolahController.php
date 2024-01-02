<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\SiswaSmaSmk;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = SiswaSmaSmk::all();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-toolbar" role="toolbar">
                            <a class="btn btn-primary mx-1 my-1" href="' . route('sekolah-sosialisasi.edit', $item->id) . '">
                                Edit
                            </a>
                            <form action="' . route('sekolah-sosialisasi.destroy', $item->id) . '" method="POST">
                                ' . method_field('delete') . csrf_field() . '
                                <button type="submit" class="btn btn-danger mx-1 my-1">
                                    Hapus
                                </button>
                            </form>
                        </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.sekolah-sosialisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.sekolah-sosialisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Sekolah::create($data);

        return redirect()->route('sekolah-sosialisasi.index')->with('status', 'Data siswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
