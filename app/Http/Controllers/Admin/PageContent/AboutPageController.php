<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutPageRequest;
use App\Models\AboutPage;
use App\Models\AlumnyCompany;
use App\Models\Program;
use App\Models\VictorySection;
use RealRashid\SweetAlert\Facades\Alert;

class AboutPageController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $aboutData = AboutPage::findOrFail(1);
        $programs = Program::with('program_contents')->get()->all();
        $victory = VictorySection::findOrFail(1);
        $company = AlumnyCompany::all();

        return view('pages.about', [
            'aboutData' => $aboutData,
            'programs' => $programs,
            'victory' => $victory,
            'companies' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $aboutData = AboutPage::findOrFail(1);
        return view('pages.admin.pages.about', ['aboutData' => $aboutData]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutPageRequest $request)
    {
        $data = $request->validated();
        $aboutData = AboutPage::findOrFail(1);

        if ($request->section2_status == null){
            $data['section2_status'] = '0';
        }
        if ($request->section3_status == null){
            $data['section3_status'] = '0';
        }
        if ($request->visi_misi_section_status == null){
            $data['visi_misi_section_status'] = '0';
        }
        if ($request->section4_status == null){
            $data['section4_status'] = '0';
        }
        if ($request->whyrhapsody_section_status == null){
            $data['whyrhapsody_section_status'] = '0';
        }

        if ($request->header_bg == null and $aboutData->header_bg != null){
            $data['header_bg'] = $aboutData->header_bg;
        }else{
            $data['header_bg'] = $request->file('header_bg')->store('assets/about-page', 'public');
        }
        if ($request->section2_img == null and $aboutData->section2_img != null){
            $data['section2_img'] = $aboutData->section2_img;
        }else{
            $data['section2_img'] = $request->file('section2_img')->store('assets/about-page', 'public');
        }
        if ($request->section3_img == null and $aboutData->section3_img != null){
            $data['section3_img'] = $aboutData->section3_img;
        }else{
            $data['section3_img'] = $request->file('section3_img')->store('assets/about-page', 'public');
        }
        if ($request->section4_img == null and $aboutData->section4_img != null){
            $data['section4_img'] = $aboutData->section4_img;
        }else{
            $data['section4_img'] = $request->file('section4_img')->store('assets/about-page', 'public');
        }
        if ($request->whyrhapsody_section_card1_icon == null and $aboutData->whyrhapsody_section_card1_icon != null){
            $data['whyrhapsody_section_card1_icon'] = $aboutData->whyrhapsody_section_card1_icon;
        }else{
            $data['whyrhapsody_section_card1_icon'] = $request->file('whyrhapsody_section_card1_icon')->store('assets/about-page', 'public');
        }
        if ($request->whyrhapsody_section_card2_icon == null and $aboutData->whyrhapsody_section_card2_icon != null){
            $data['whyrhapsody_section_card2_icon'] = $aboutData->whyrhapsody_section_card2_icon;
        }else{
            $data['whyrhapsody_section_card2_icon'] = $request->file('whyrhapsody_section_card2_icon')->store('assets/about-page', 'public');
        }
        if ($request->whyrhapsody_section_card3_icon == null and $aboutData->whyrhapsody_section_card3_icon != null){
            $data['whyrhapsody_section_card3_icon'] = $aboutData->whyrhapsody_section_card3_icon;
        }else{
            $data['whyrhapsody_section_card3_icon'] = $request->file('whyrhapsody_section_card3_icon')->store('assets/about-page', 'public');
        }

        $aboutData->update($data);
        Alert::success('Hore!', 'About Page Berhasil Diedit!');
        return redirect()->route('about-page-edit')->with('status', 'Data about page berhasil diupdate!');
    }
}
