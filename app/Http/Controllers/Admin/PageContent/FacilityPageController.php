<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\FacilityPageRequest;
use App\Models\FacilityContent;
use App\Models\FacilityPage;
use App\Models\Program;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class FacilityPageController extends Controller
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
        $facilityPageData = FacilityPage::findOrFail(1);
        $facilities = FacilityContent::with('facility_photo')->get()->all();
        $programs = Program::with('program_contents')->get()->all();

        return view('pages.facilities', [
            'facilityPageData' => $facilityPageData,
            'facilities' => $facilities,
            'programs' => $programs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $facilityPageData = FacilityPage::findOrFail(1);
        return view('pages.admin.pages.facilities', ['facilityPageData' => $facilityPageData]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacilityPageRequest $request)
    {
        $data = $request->validated();
        $facilityPageData = FacilityPage::findOrFail(1);
        if ($request->header_bg == null and $facilityPageData->header_bg != null){
            $data['header_bg'] = $facilityPageData->header_bg;
        }else{
            $data['header_bg'] = $request->file('header_bg')->store('assets/facility-page', 'public');
        }
        $facilityPageData->update($data);
        Alert::success('Hore!', 'Facility Page Berhasil Diedit!');
        return redirect()->route('facility-page-edit')->with('status', 'Data facility page berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
