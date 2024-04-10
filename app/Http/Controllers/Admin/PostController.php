<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with(['user', 'tags', 'category'])->latest()->get();
        $title = 'Hapus Artikel!';
        $text = "Apakah anda yakin ingin menghapus artikel ini?";
        confirmDelete($title, $text);

        return view('pages.admin.posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();

        return view('pages.admin.posts.create',[
            'tags' => $tags,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($request->title);
        $data['user_id'] = Auth::user()->id;
        $data['thumbnail_photo'] = $request->file('thumbnail_photo')->store('assets/post-thumbnail', 'public');

        Alert::success('Hore!', 'Post berhasil dibuat!');
        $post = Post::create($data);
        $post->tags()->sync((array)$request->input('tag_id'));

        return redirect()->route('posts.index')->with('status', 'Data artikel post berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        return view('pages.admin.posts.detail')->with('post', Post::where('slug', $slug)->where('deleted_at', null)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artikel = Post::with((['tags', 'category']))->findOrFail($id);
        $tags = Tag::all();
        $categories = Category::all();

        return view('pages.admin.posts.edit',[
            'artikel' => $artikel,
            'tags' => $tags,
            'categories' => $categories
        ]);
    }


    public function uploadPhoto(PostRequest $request, Post $post){
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('assets/post-photo'), $fileName);

            $url = asset('assets/post-photo/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $request, Post $artikel)
    {
        $data = $request->validated();

        $blog = Post::findOrFail($artikel->id);

        $data['slug'] = Str::slug($request->title);
        $data['thumbnail_photo'] = $request->file('thumbnail_photo')->store('assets/blog-thumbnail', 'public');

        Alert::success('Hore!', 'Post berhasil diedit!');
        $blog->update($data);
        $blog->tags()->sync((array)$request->input('tag_id'));

        return redirect()->route('posts.index')->with('status', 'Data artikel post berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->tags()->detach();
        Alert::success('Hore!','Post berhasil dihapus!');
        $post->delete();

        return redirect()->route('posts.index')->with('status', 'Data artikel post berhasil dihapus!');
    }
}
