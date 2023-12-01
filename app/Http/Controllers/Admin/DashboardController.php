<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CalonPesertaDiploma;
use App\Models\CalonPesertaExecutive;
use App\Models\ContactForm;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard', [
            'artikel' => Post::count(),
            'contact' => ContactForm::count(),
            'pesertaDiploma' => CalonPesertaDiploma::count(),
            'pesertaExecutive' => CalonPesertaExecutive::count()
        ]);
    }
}
