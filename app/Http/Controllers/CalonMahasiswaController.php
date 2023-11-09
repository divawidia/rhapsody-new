<?php

namespace App\Http\Controllers;

use App\Models\CalonPesertaExecutive;
use App\Models\ProgramExecutive;
use Illuminate\Http\Request;

class CalonMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $program_executives = ProgramExecutive::all();

        return view('pages.executive_registration', [
            'program_executives' => $program_executives
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['jenis_refrensi'] = implode(", ",$request->input('jenis_refrensi'));

        CalonPesertaExecutive::create($data);

        return redirect()->route('registrasi-berhasil');
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
