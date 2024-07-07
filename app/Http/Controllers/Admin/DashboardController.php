<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $artikel = Post::with(['user', 'tags', 'category'])->latest()->get();
        $contact = ContactForm::latest()->get();
        return view('pages.admin.dashboard', [
            'artikel' => $artikel,
            'contact' => $contact
        ]);
    }
}
