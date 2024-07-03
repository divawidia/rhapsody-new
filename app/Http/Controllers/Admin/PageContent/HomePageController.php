<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomePageRequest;
use App\Models\Home;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomePageController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $homeData = Home::findOrFail(1);
        return view('pages.home', ['homeData' => $homeData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $homeData = Home::findOrFail(1);
        return view('pages.admin.pages.home', ['homeData' => $homeData]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HomePageRequest $request)
    {
        $data = $request->validated();
        $homeData = Home::findOrFail(1);

        if ($request->section2_status == null){
            $data['section2_status'] = '0';
        }
        if ($request->program_section_status == null){
            $data['program_section_status'] = '0';
        }
        if ($request->fasilitas_section_status == null){
            $data['fasilitas_section_status'] = '0';
        }
        if ($request->victory_section_status == null){
            $data['victory_section_status'] = '0';
        }

        if ($request->section2_img1 == null and $homeData->section2_img1 != null){
            $data['section2_img1'] = $homeData->section2_img1;
        }else{
            $data['section2_img1'] = $request->file('section2_img1')->store('assets/home-page', 'public');
        }
        if ($request->section2_img2 == null and $homeData->section2_img2 != null){
            $data['section2_img2'] = $homeData->section2_img2;
        }else{
            $data['section2_img2'] = $request->file('section2_img2')->store('assets/home-page', 'public');
        }
        if ($request->section2_img3 == null and $homeData->section2_img3 != null){
            $data['section2_img3'] = $homeData->section2_img3;
        }else{
            $data['section2_img3'] = $request->file('section2_img3')->store('assets/home-page', 'public');
        }
        if ($request->section2_img4 == null and $homeData->section2_img4 != null){
            $data['section2_img4'] = $homeData->section2_img4;
        }else{
            $data['section2_img4'] = $request->file('section2_img4')->store('assets/home-page', 'public');
        }
        if ($request->fasilitas_section_img == null and $homeData->fasilitas_section_img != null){
            $data['fasilitas_section_img'] = $homeData->fasilitas_section_img;
        }else{
            $data['fasilitas_section_img'] = $request->file('fasilitas_section_img')->store('assets/home-page', 'public');
        }
        $homeData->update($data);
        Alert::success('Hore!', 'Post berhasil diedit!');
        return redirect()->route('home-page-edit')->with('status', 'Data home page berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
