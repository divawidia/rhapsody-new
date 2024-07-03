<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\TagRequest;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Category::with(['user'])->latest()->get();;

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="' . route('categories.edit', $item->id) . '">Edit</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="' . route('categories.destroy', $item->id) . '" data-confirm-delete="true">Hapus</a>
                                </li>
                            </ul>
                        </div>';
                })
                ->editColumn('status', function ($item){
                    if ($item->status == 1) {
                        $badge = '<span class="badge bg-success">Publish</span>';
                    }else{
                        $badge = '<span class="badge bg-danger">Private</span>';
                    }
                    return $badge;
                })
                ->rawColumns(['action', 'status'])
                ->make();
        }
        $title = 'Hapus Kategori!';
        $text = "Apakah anda yakin ingin menghapus kategori ini?";
        confirmDelete($title, $text);

        return view('pages.admin.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->category_name);

        Category::create($data);
        Alert::success('Hore!', 'Kategori berhasil dibuat!');
        return redirect()->route('categories.index')->with('status', 'Data kategori berhasil dibuat!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('pages.admin.categories.edit', ['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();
        $category = Category::findOrFail($category->id);
        $data['slug'] = Str::slug($request->category_name);
        $category->update($data);
        alert()->success('Hore!','Kategori berhasil diupdate!');
        return redirect()->route('categories.index')->with('status', 'Data kategori berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tag = Category::findOrFail($id);
        alert()->success('Hore!','Kategori berhasil dihapus!');
        $tag->delete();

        return redirect()->route('categories.index')->with('status', 'Data kategori berhasil dihapus!');
    }
}
