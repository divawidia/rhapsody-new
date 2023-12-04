<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Tag::with(['user'])->latest()->get();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return  $this->buttonTooltips(route('tags.edit', $item->id), 'btn-primary', 'Edit Data tags', 'bx-edit')
                        .' '.$this->formButtonTooltips(route('tags.destroy', $item->id), 'btn-danger', 'Hapus Data tags', 'bx-trash', 'DELETE');
                })
                ->editColumn('status', function ($item){
                    return $this->status($item->status);
                })
                ->rawColumns(['action', 'status'])
                ->make();
        }
        return view('pages.admin.tags.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->tag_name);

        Tag::create($data);
        Alert::success('Hore!', 'Tag berhasil dibuat!');
        return redirect()->route('tags.index')->with('status', 'Data tag berhasil dibuat!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('pages.admin.tags.edit',[
            'tag' => $tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->tag_name);
        $tag->update($data);
        alert()->success('Hore!','Tag berhasil diupdate!');
        return redirect()->route('tags.index')->with('status', 'Tag artikel berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        alert()->success('Hore!','Tag berhasil dihapus!');
        return redirect()->route('tags.index')->with('status', 'Data tag blog berhasil dihapus!');
    }
}
