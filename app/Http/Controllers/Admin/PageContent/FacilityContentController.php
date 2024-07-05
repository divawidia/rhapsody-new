<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\FacilityContentRequest;
use App\Models\FacilityContent;
use App\Models\FacilityPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class FacilityContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = FacilityContent::latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-toolbar" role="toolbar">
                            <a class="btn btn-primary mx-1 my-1" href="' . route('content.edit', $item->id) . '" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                                <i class="bx bx-edit"></i>
                            </a>
                            <form action="' . route('content.destroy', $item->id) . '" method="POST">
                                ' . method_field('delete') . csrf_field() . '
                                <button type="submit" class="btn btn-danger mx-1 my-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus Data">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </form>
                        </div>';
                })
                ->editColumn('icon', function ($item) {
                    return $item->icon ? '<img src="' . Storage::url($item->icon) . '"/>' : '';
                })
                ->rawColumns(['action', 'icon'])
                ->make();
        }
        return view('pages.admin.pages.facilities');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.section-content.facilities.create');
    }

    public function uploadPhoto(Request $request)
    {
        $name = [];
        foreach ($request->file('file') as $imageFile) {
            $image = $imageFile->store('assets/facility-page', 'public');
            $name[] = $image;
        }

        return response()->json([
            'name'=> $name,
        ]);
    }

    public function deletePhoto(string $id)
    {
        $item = FacilityPhoto::findOrFail($id);
        if ($item) {
            $item->delete();
        }
        Storage::delete($item->photo_url);
        Alert::success('Hore!', 'Foto Berhasil Dihapus!');
        return redirect()->route('content.edit', $item->facility_id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FacilityContentRequest $request)
    {
        $data = $request->all();
        $data['facility_page_id'] = 1;
        $data['home_page_id'] = 1;
        $data['icon'] = $request->file('icon')->store('assets/facility-page', 'public');
        $facility = FacilityContent::create($data);

        foreach ($request->photo_url as $image) {
            FacilityPhoto::create([
                'facility_id' => $facility->id,
                'photo_url' => $image
            ]);
        }

        Alert::success('Hore!', 'Fasilitas Berhasil Ditambahkan!');
//        return response()->json($facility);
        return redirect()->route('facility-page-edit')->with('status', 'Data fasilitas berhasil ditambahkan!');
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
        $facilityContent = FacilityContent::with(['facility_photo'])->findOrFail($id);
        $title = 'Hapus Foto!';
        $text = "Apakah anda yakin ingin menghapus foto ini?";
        confirmDelete($title, $text);

        return view('pages.admin.section-content.facilities.edit',[
            'facilityContent' => $facilityContent
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacilityContentRequest $request, FacilityContent $content)
    {
        $data = $request->validated();
        $facilityContent = FacilityContent::findOrFail($content->id);
        if ($request->icon == null and $facilityContent->icon != null){
            $data['icon'] = $facilityContent->icon;
        }else{
            $data['icon'] = $request->file('icon')->store('assets/facility-page', 'public');
        }

        if ($request->photo_url != null) {
            foreach ($request->photo_url as $image) {
                FacilityPhoto::create([
                    'facility_id' => $facilityContent->id,
                    'photo_url' => $image
                ]);
            }
        }

        $facilityContent->update($data);
        Alert::success('Hore!', 'Facility Content Berhasil Diedit!');
        return redirect()->route('facility-page-edit')->with('status', 'Data facility content berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
