<?php

use App\Http\Controllers\Admin\CalonMahasiswaController;
use App\Http\Controllers\Admin\CalonPesertaDiplomaController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JadwalSosialisasiController;
use App\Http\Controllers\Admin\PageContent\AboutPageController;
use App\Http\Controllers\Admin\PageContent\ContactPageController;
use App\Http\Controllers\Admin\PageContent\FacilityContentController;
use App\Http\Controllers\Admin\PageContent\FacilityPageController;
use App\Http\Controllers\Admin\PageContent\HomePageController;
use App\Http\Controllers\Admin\PageContent\ProgramCareerCompanyController;
use App\Http\Controllers\Admin\PageContent\ProgramCareerSalaryController;
use App\Http\Controllers\Admin\PageContent\ProgramContentController;
use App\Http\Controllers\Admin\PageContent\ProgramController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SectionContent\AlumnyCompanyController;
use App\Http\Controllers\Admin\SectionContent\TestimonyController;
use App\Http\Controllers\Admin\SectionContent\VictorySectionController;
use App\Http\Controllers\Admin\SekolahController;
use App\Http\Controllers\Admin\SiswaSmaSmkController;
use App\Http\Controllers\Admin\TagController;
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

Route::get('/', [HomePageController::class, 'show'])->name('home');
Route::get('/about-us', [AboutPageController::class, 'show'])->name('about-us');
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
Route::get('/fasilitas', function () {
    return view('pages.facilities');
})->name('fasilitas');
Route::get('/under-maintenance', function () {
    return view('pages.under_maintenance');
})->name('under-maintenance');
Route::get('/contact-us', [ContactPageController::class, 'show'])->name('contact');

Route::get('/kunci-masa-depanmu-ada-disini', [SiswaSmaSmkController::class, 'landing_page_create'])->name('landing-page');
Route::post('/kunci-masa-depanmu-ada-disini', [SiswaSmaSmkController::class, 'landing_page_store'])->name('landing-page.store');

Route::get('/interview', [SiswaSmaSmkController::class, 'landing_page_create'])->name('landing-page-interview');
Route::post('/interview', [SiswaSmaSmkController::class, 'landing_page_store'])->name('landing-page-interview.store');

Route::get('/promo', [SiswaSmaSmkController::class, 'landing_page_luar_bali_create'])->name('promo-luar-bali');
Route::post('/promo', [SiswaSmaSmkController::class, 'landing_page_luar_bali_store'])->name('promo-luar-bali-store');


Route::get('/registrasi-program-executive-hybrid', [\App\Http\Controllers\Admin\CalonMahasiswaController::class, 'create'])->name('registrasi-program-executive');
Route::post('/registrasi-program-executive-hybrid', [\App\Http\Controllers\Admin\CalonMahasiswaController::class, 'store'])->name('registrasi-program-executive.store');

Route::get('/registrasi-program-d1', [\App\Http\Controllers\Admin\CalonPesertaDiplomaController::class, 'create'])->name('registrasi-program-d1');
Route::post('/registrasi-program-d1', [\App\Http\Controllers\Admin\CalonPesertaDiplomaController::class, 'store'])->name('registrasi-program-d1.store');

Route::get('/registrasi-berhasil', function () {return view('pages.registration_complete');})->name('registrasi-berhasil');

Route::get('/registrasi-ulang-executive', function () {
    return view('pages.executive_daftar_ulang');
})->name('executive-daftar-ulang');

Route::prefix('blogs-news-events')
    ->group(function () {
        Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('blogs-news-events');
        Route::get('/{slug}', [\App\Http\Controllers\PostController::class, 'show'])->name('blogs-news-events-detail');
        Route::get('/category/{slug}', [\App\Http\Controllers\PostController::class, 'index_by_category'])->name('blogs-news-events-category');
        Route::get('/tag/{slug}', [\App\Http\Controllers\PostController::class, 'index_by_tag'])->name('blogs-news-events-tag');
        Route::get('/user/{name}', [\App\Http\Controllers\PostController::class, 'index_by_user'])->name('blogs-news-events-user');
    });

Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('calon-peserta-executive', CalonMahasiswaController::class);
        Route::resource('calon-peserta-diploma', CalonPesertaDiplomaController::class);
        Route::resource('tags', TagController::class);
        Route::resource('posts', PostController::class);
        Route::resource('categories', CategoryController::class);
        Route::post('upload-blog-photo', [PostController::class, 'uploadPhoto'])->name('blog-photo-upload');
        Route::post('upload-blog-thumbnail', [PostController::class, 'uploadPhotoThumbnail'])->name('blog-thumbnail-upload');
        Route::get('delete-blog-photo/{id}', [PostController::class, 'deletePhoto'])->name('blog-photo-delete');
        Route::prefix('sosialisasi')
            ->group(function (){
                Route::resource('siswa-sma-smk', SiswaSmaSmkController::class);
                Route::resource('sekolah', SekolahController::class);
                Route::resource('jadwal', JadwalSosialisasiController::class);
            });
        Route::prefix('pages')
            ->group(function (){
                Route::get('home', [HomePageController::class, 'edit'])->name('home-page-edit');
                Route::patch('home', [HomePageController::class, 'update'])->name('home-page-update');

                Route::get('about', [AboutPageController::class, 'edit'])->name('about-page-edit');
                Route::patch('about', [AboutPageController::class, 'update'])->name('about-page-update');

                Route::get('contact', [ContactPageController::class, 'edit'])->name('contact-page-edit');
                Route::patch('contact', [ContactPageController::class, 'update'])->name('contact-page-update');

                Route::prefix('facility')
                    ->group(function (){
                        Route::get('/', [FacilityPageController::class, 'edit'])->name('facility-page-edit');
                        Route::patch('/', [FacilityPageController::class, 'update'])->name('facility-page-update');
                        Route::post('upload-image', [FacilityContentController::class, 'uploadPhoto'])->name('uploadImageViaAjax');
                        Route::resource('content', FacilityContentController::class);
                        Route::get('content/photo/delete/{id}', [FacilityContentController::class, 'deletePhoto'])->name('delete-facility-photo');
                    });
                Route::resource('programs', ProgramController::class);

                Route::resource('pelatihan', ProgramContentController::class);
                Route::prefix('pelatihan')
                    ->group(function (){
                        Route::post('upload-image', [ProgramContentController::class, 'uploadPhoto'])->name('upload-programs-photo');
                        Route::get('delete-photo/{id}', [ProgramContentController::class, 'deletePhoto'])->name('delete-programs-photo');

                        Route::get('/{pelatihan}/prospek-karir/create', [ProgramCareerSalaryController::class, 'create'])->name('prospek-karir.create');
                        Route::post('/{pelatihan}/prospek-karir', [ProgramCareerSalaryController::class, 'store'])->name('prospek-karir.store');
                        Route::get('/{pelatihan}/prospek-karir/{karir}/edit', [ProgramCareerSalaryController::class, 'edit'])->name('prospek-karir.edit');
                        Route::put('/{pelatihan}/prospek-karir/{karir}', [ProgramCareerSalaryController::class, 'update'])->name('prospek-karir.update');
                        Route::delete('/{pelatihan}/prospek-karir/{karir}', [ProgramCareerSalaryController::class, 'destroy'])->name('prospek-karir.destroy');

                        Route::get('/{pelatihan}/career-company', [ProgramCareerCompanyController::class, 'index'])->name('career-company.index');
                        Route::get('/{pelatihan}/career-company/create', [ProgramCareerCompanyController::class, 'create'])->name('career-company.create');
                        Route::post('/{pelatihan}/career-company', [ProgramCareerCompanyController::class, 'store'])->name('career-company.store');
                        Route::get('/{pelatihan}/career-company/{company}/edit', [ProgramCareerCompanyController::class, 'edit'])->name('career-company.edit');
                        Route::put('/{pelatihan}/career-company/{company}', [ProgramCareerCompanyController::class, 'update'])->name('career-company.update');
                        Route::delete('/{pelatihan}/career-company/{company}', [ProgramCareerCompanyController::class, 'destroy'])->name('career-company.destroy');
                    });
            });
        Route::prefix('section')
            ->group(function (){
                Route::get('victory', [VictorySectionController::class, 'edit'])->name('victory-section-edit');
                Route::patch('victory', [VictorySectionController::class, 'update'])->name('victory-section-update');

                Route::resource('testimoni', TestimonyController::class);
                Route::resource('company', AlumnyCompanyController::class);
            });
    });
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout-admin');
Auth::routes();
