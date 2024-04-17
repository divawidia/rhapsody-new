<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Hamcrest\StringDescription;
use http\QueryString;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with(['user', 'tags', 'category'])->latest()->paginate(10);
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::with(['user', 'tags', 'category'])->latest()->take(5)->get();

        return view('pages.article', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ]);
    }

    public function index_by_category(String $slug){
        $posts = Post::with(['user', 'tags', 'category'])->whereHas('category', function ($query) use ($slug) {
                        $query->where('slug', $slug);
                    })->latest()->get();
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::with(['user', 'tags', 'category'])->latest()->take(5)->get();

        return view('pages.article', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ]);
    }

    public function index_by_tag(String $slug){
        $posts = Post::with(['user', 'tags', 'category'])->whereHas('tags', function ($query) use ($slug) {
                        $query->where('slug', $slug);
                    })->latest()->get();
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::with(['user', 'tags', 'category'])->latest()->take(5)->get();

        return view('pages.article', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ]);
    }

    public function index_by_user(String $name){
        $posts = Post::with(['user', 'tags', 'category'])->whereHas('user', function ($query) use ($name) {
                        $query->where('slug', $name);
                    })->latest()->get();
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::with(['user', 'tags', 'category'])->latest()->take(5)->get();

        return view('pages.article', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ]);
    }

    public function show(String $slug)
    {
        $post = Post::where('slug', $slug)->where('deleted_at', null)->first();
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::with(['user', 'tags', 'category'])->latest()->take(5)->get();

        $expiresAt = now()->addHours(3);
        views($post)->cooldown($expiresAt)->record();

        return view('pages.article-detail', [
            'post' => $post,
            'recent_posts' => $recent_posts,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }
}
