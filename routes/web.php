<?php

use App\Http\Controllers\Admin\CalonMahasiswaController;
use App\Http\Controllers\Admin\CalonPesertaDiplomaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SiswaSmaSmkController;
use Illuminate\Support\Facades\Auth;
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
//Route::get('/kunci-masa-depanmu-ada-disini', function () {
//    return view('pages.landing_page_pendaftaran');
//})->name('landing_page');
Route::get('/fasilitas', function () {
    return view('pages.facilities');
})->name('fasilitas');
Route::get('/under-maintenance', function () {
    return view('pages.under_maintenance');
})->name('under-maintenance');
Route::get('/contact-us', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/kunci-masa-depanmu-ada-disini', [\App\Http\Controllers\Admin\SiswaSmaSmkController::class, 'landing_page_create'])->name('landing-page');
Route::post('/kunci-masa-depanmu-ada-disini', [\App\Http\Controllers\Admin\SiswaSmaSmkController::class, 'landing_page_store'])->name('landing-page.store');

Route::get('/interview', [\App\Http\Controllers\Admin\SiswaSmaSmkController::class, 'landing_page_create'])->name('landing-page');
Route::post('/interview', [\App\Http\Controllers\Admin\SiswaSmaSmkController::class, 'landing_page_store'])->name('landing-page.store');

Route::get('/registrasi-program-executive-hybrid', [\App\Http\Controllers\Admin\CalonMahasiswaController::class, 'create'])->name('registrasi-program-executive');
Route::post('/registrasi-program-executive-hybrid', [\App\Http\Controllers\Admin\CalonMahasiswaController::class, 'store'])->name('registrasi-program-executive.store');

Route::get('/registrasi-program-d1', [\App\Http\Controllers\Admin\CalonPesertaDiplomaController::class, 'create'])->name('registrasi-program-d1');
Route::post('/registrasi-program-d1', [\App\Http\Controllers\Admin\CalonPesertaDiplomaController::class, 'store'])->name('registrasi-program-d1.store');

Route::get('/registrasi-berhasil', function () {return view('pages.registration_complete');})->name('registrasi-berhasil');

Route::get('/registrasi-ulang-executive', function () {
    return view('pages.executive_daftar_ulang');
})->name('executive-daftar-ulang');


Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('calon-peserta-executive', CalonMahasiswaController::class);
        Route::resource('calon-peserta-diploma', CalonPesertaDiplomaController::class);
        Route::resource('siswa-sma-smk-sosialisasi', SiswaSmaSmkController::class);
//        Route::get('/siswa-sma-smk', [SiswaSmaSmkController::class, 'index'])->name('index-absensi-siswa-sosialisasi');
    });
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout-admin');
Auth::routes();
