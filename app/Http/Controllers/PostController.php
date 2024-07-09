<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Program;
use App\Models\Tag;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with(['user', 'tags', 'category'])->latest()->paginate(10);
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::with(['user', 'tags', 'category'])->latest()->take(5)->get();
        $programs = Program::with('program_contents')->get()->all();

        return view('pages.article', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts,
            'programs' => $programs
        ]);
    }

    public function index_by_category(String $slug){
        $posts = Post::with(['user', 'tags', 'category'])->whereHas('category', function ($query) use ($slug) {
                        $query->where('slug', $slug);
                    })->latest()->paginate(10);
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::with(['user', 'tags', 'category'])->latest()->take(5)->get();
        $programs = Program::with('program_contents')->get()->all();

        return view('pages.article', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts,
            'programs' => $programs
        ]);
    }

    public function index_by_tag(String $slug){
        $posts = Post::with(['user', 'tags', 'category'])->whereHas('tags', function ($query) use ($slug) {
                        $query->where('slug', $slug);
                    })->latest()->paginate(10);
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::with(['user', 'tags', 'category'])->latest()->take(5)->get();
        $programs = Program::with('program_contents')->get()->all();

        return view('pages.article', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts,
            'programs' => $programs
        ]);
    }

    public function index_by_user(String $name){
        $posts = Post::with(['user', 'tags', 'category'])->whereHas('user', function ($query) use ($name) {
                        $query->where('slug', $name);
                    })->latest()->paginate(10);
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::with(['user', 'tags', 'category'])->latest()->take(5)->get();
        $programs = Program::with('program_contents')->get()->all();

        return view('pages.article', [
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts,
            'programs' => $programs
        ]);
    }

    public function show(String $slug)
    {
        $post = Post::where('slug', $slug)->where('deleted_at', null)->first();
        $categories = Category::all();
        $tags = Tag::all();
        $recent_posts = Post::with(['user', 'tags', 'category'])->latest()->take(5)->get();
        $programs = Program::with('program_contents')->get()->all();

        $expiresAt = now()->addHours(3);
        views($post)->cooldown($expiresAt)->record();

        return view('pages.article-detail', [
            'post' => $post,
            'recent_posts' => $recent_posts,
            'categories' => $categories,
            'tags' => $tags,
            'programs' => $programs
        ]);
    }
}
