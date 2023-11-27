<?php

use \App\Http\Controllers\CalonMahasiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\DashboardController;
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
Route::get('/modal', function () {
    return view('pages.modal');
})->name('modal');

Route::get('/registrasi-program-executive-hybrid', [App\Http\Controllers\CalonMahasiswaController::class, 'create'])->name('registrasi-program-executive');
Route::post('/registrasi-program-executive-hybrid', [App\Http\Controllers\CalonMahasiswaController::class, 'store'])->name('registrasi-program-executive.store');

Route::get('/registrasi-program-d1', [App\Http\Controllers\CalonPesertaDiplomaController::class, 'create'])->name('registrasi-program-d1');
Route::post('/registrasi-program-d1', [App\Http\Controllers\CalonPesertaDiplomaController::class, 'store'])->name('registrasi-program-d1.store');

Route::get('/registrasi-berhasil', function () {return view('pages.registration_complete');})->name('registrasi-berhasil');


Route::prefix('admin')
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('calon-peserta-executive', CalonMahasiswaController::class);
        Route::resource('calon-peserta-diploma', \App\Http\Controllers\CalonPesertaDiplomaController::class);
    });

Auth::routes();
