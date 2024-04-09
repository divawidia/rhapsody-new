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
            $query = Tag::with(['user'])->latest()->get();;

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="' . route('tags.edit', $item->id) . '">Edit</a>
                                </li>
                                <li>
                                <form action="' . route('tags.destroy', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="dropdown-item" data-confirm-delete="true">
                                        Hapus
                                    </button>
                                </form>
                                </li>
                            </ul>
                        </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }
        $title = 'Hapus Tag!';
        $text = "Apakah anda yakin ingin menghapus tag ini?";
        confirmDelete($title, $text);

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
        $tag = Tag::findOrFail($id);

        return view('pages.admin.tag.edit',[
            'tag' => $tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagRequest $request, Tag $tag)
    {
        $data = $request->validated();

        $tag = Tag::findOrFail($tag->id);

        $data['slug'] = Str::slug($request->tag_name);

        $tag->update($data);

        return redirect()->route('tags.index')->with('status', 'Data tag blog berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tag = Tag::findOrFail($id);
        alert()->success('Hore!','Tag berhasil dihapus!');
        $tag->delete();

        return redirect()->route('tags.index')->with('status', 'Data tag blog berhasil dihapus!');
    }
}
