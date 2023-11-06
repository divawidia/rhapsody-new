<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/about-us', function () {
    return view('pages.about');
})->name('about-us');
Route::get('/programs/front-office', function () {
    return view('pages.front_office');
})->name('front-office');
Route::get('/programs/housekeeping', function () {
    return view('pages.housekeeping');
})->name('housekeeping');
Route::get('/programs/f&b-product', function () {
    return view('pages.f&b_product');
})->name('f&b-product');
Route::get('/programs/f&b-service', function () {
    return view('pages.f&b_service');
})->name('f&b-service');
Route::get('/programs/galley-&-cook', function () {
    return view('pages.galley&cook');
})->name('galley&cook');
Route::get('/programs/laundry-&-housekeeping', function () {
    return view('pages.laundry&housekeeping');
})->name('laundry&housekeeping');
Route::get('/programs/bar-&-service', function () {
    return view('pages.bar&service');
})->name('bar&service');
Route::get('/kunci-masa-depanmu-ada-disini', function () {
    return view('pages.landing_page_pendaftaran');
})->name('landing_page');
Route::get('/fasilitas', function () {
    return view('pages.facilities');
})->name('fasilitas');
Route::get('/under-maintenance', function () {
    return view('pages.under_maintenance');
})->name('under-maintenance');
Route::get('/contact-us', function () {
    return view('pages.contact');
})->name('contact');
