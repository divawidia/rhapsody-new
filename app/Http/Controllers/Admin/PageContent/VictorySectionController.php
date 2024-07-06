<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\VictorySectionRequest;
use App\Models\VictorySection;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VictorySectionController extends Controller
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
//        $victory = VictorySection::findOrFail(1);
//        return view('pages.admin.section-content.victory', ['victory' => $victory]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $victory = VictorySection::findOrFail(1);
        return view('pages.admin.section-content.victory', ['victory' => $victory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VictorySectionRequest $request)
    {
        $data = $request->validated();
        $victory = VictorySection::findOrFail(1);

        if ($request->victory_section_btn_icon == null and $victory->victory_section_btn_icon != null){
            $data['victory_section_btn_icon'] = $victory->victory_section_btn_icon;
        }else{
            $data['victory_section_btn_icon'] = $request->file('victory_section_btn_icon')->store('assets/victory-section', 'public');
        }
        if ($request->victory_section_bg == null and $victory->victory_section_bg != null){
            $data['victory_section_bg'] = $victory->victory_section_bg;
        }else{
            $data['victory_section_bg'] = $request->file('victory_section_bg')->store('assets/victory-section', 'public');
        }

        $victory->update($data);
        Alert::success('Hore!', 'Victory section berhasil diedit!');
        return redirect()->route('victory-section-edit')->with('status', 'Data victory section berhasil diupdate!');
    }
}
