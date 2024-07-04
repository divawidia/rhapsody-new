<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\FacilityPageRequest;
use App\Models\FacilityPage;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        return view('pages.facilities', ['facilityPageData' => $facilityPageData]);
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
