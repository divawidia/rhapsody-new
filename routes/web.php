<?php

use App\Http\Controllers\Admin\CalonPesertaExecutiveController;
use App\Http\Controllers\Admin\CalonPesertaDiplomaController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NotificationController;
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
use App\Http\Controllers\Admin\SectionContent\FaqController;
use App\Http\Controllers\Admin\SectionContent\TestimonyController;
use App\Http\Controllers\Admin\SectionContent\VictorySectionController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
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
Route::get('/program-pelatihan/{slug}', [ProgramContentController::class, 'show'])->name('program-detail');

Route::get('/fasilitas', [FacilityPageController::class, 'show'])->name('fasilitas');

Route::get('/under-maintenance', function () {return view('pages.under_maintenance');})->name('under-maintenance');

Route::get('/contact-us', [ContactPageController::class, 'show'])->name('contact');
Route::post('/contact-forms', [ContactFormController::class, 'store'])->name('contact-forms.store');

//Route::get('/kunci-masa-depanmu-ada-disini', [SiswaSmaSmkController::class, 'landing_page_create'])->name('landing-page');
//Route::post('/kunci-masa-depanmu-ada-disini', [SiswaSmaSmkController::class, 'landing_page_store'])->name('landing-page.store');
//
//Route::get('/interview', [SiswaSmaSmkController::class, 'landing_page_create'])->name('landing-page-interview');
//Route::post('/interview', [SiswaSmaSmkController::class, 'landing_page_store'])->name('landing-page-interview.store');
//
//Route::get('/promo', [SiswaSmaSmkController::class, 'landing_page_luar_bali_create'])->name('promo-luar-bali');
//Route::post('/promo', [SiswaSmaSmkController::class, 'landing_page_luar_bali_store'])->name('promo-luar-bali-store');

Route::get('/registrasi-program-executive', [CalonPesertaExecutiveController::class, 'create'])->name('registrasi-program-executive');
Route::post('/registrasi-program-executive', [CalonPesertaExecutiveController::class, 'store'])->name('registrasi-program-executive.store');

Route::get('/registrasi-program-d1', [CalonPesertaDiplomaController::class, 'create'])->name('registrasi-program-d1');
Route::post('/registrasi-program-d1', [CalonPesertaDiplomaController::class, 'store'])->name('registrasi-program-d1.store');

Route::get('/registrasi-berhasil', [HomePageController::class, 'registrationComplete'])->name('registrasi-berhasil');

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

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/waiting-approval', function (){ return view('auth.verify');});

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->middleware(['auth', 'admin'])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');

    Route::patch('/notifications/mark-as-read/{id}', [NotificationController::class, 'markAsRead'])->name('notifications.mark-as-read');
    Route::get('/notifications/mark-all-as-read', [NotificationController::class, 'markAllAsRead'])->name('notifications.mark-all-as-read');


    Route::resource('calon-peserta-executive', CalonPesertaExecutiveController::class);
    Route::resource('calon-peserta-diploma', CalonPesertaDiplomaController::class);

    Route::resource('tags', TagController::class);
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('posts-dashboard', [PostController::class, 'dashboard'])->name('posts.dashboard');

    Route::post('upload-blog-photo', [PostController::class, 'uploadPhoto'])->name('blog-photo-upload');
    Route::post('upload-blog-thumbnail', [PostController::class, 'uploadPhotoThumbnail'])->name('blog-thumbnail-upload');
    Route::get('delete-blog-photo/{id}', [PostController::class, 'deletePhoto'])->name('blog-photo-delete');

    Route::get('pertanyaan-terkirim', [ContactFormController::class, 'index'])->name('contact-forms.index');
    Route::delete('pertanyaan-terkirim/{contact}', [ContactFormController::class, 'destroy'])->name('contact-forms.destroy');

    Route::resource('users', UserController::class);

    Route::get('/profile-setting', [UserController::class, 'setting'])->name('profile-setting.edit');
    Route::put('/profile-setting/update', [UserController::class, 'updateSetting'])->name('profile-setting.update');

    Route::get('/profile-setting/change-password', [UserController::class, 'changePassword'])->name('change-password');
    Route::put('/profile-setting/change-password/update', [UserController::class, 'changePasswordUpdate'])->name('change-password.update');

    Route::prefix('pages')->group(function (){
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
        Route::prefix('pelatihan')->group(function () {
            Route::post('upload-image', [ProgramContentController::class, 'uploadPhoto'])->name('upload-programs-photo');
            Route::get('delete-photo/{id}', [ProgramContentController::class, 'deletePhoto'])->name('delete-programs-photo');

            Route::prefix('{pelatihan}')->group(function () {
                Route::prefix('prospek-karir')->name('prospek-karir.')->group(function () {
                    Route::get('create', [ProgramCareerSalaryController::class, 'create'])->name('create');
                    Route::post('', [ProgramCareerSalaryController::class, 'store'])->name('store');
                    Route::prefix('{karir}')->group(function () {
                        Route::get('edit', [ProgramCareerSalaryController::class, 'edit'])->name('edit');
                        Route::put('', [ProgramCareerSalaryController::class, 'update'])->name('update');
                        Route::delete('', [ProgramCareerSalaryController::class, 'destroy'])->name('destroy');
                    });
                });

                Route::prefix('career-company')->name('career-company.')->group(function () {
                    Route::get('', [ProgramCareerCompanyController::class, 'index'])->name('index');
                    Route::get('create', [ProgramCareerCompanyController::class, 'create'])->name('create');
                    Route::post('', [ProgramCareerCompanyController::class, 'store'])->name('store');
                    Route::prefix('{company}')->group(function () {
                        Route::get('edit', [ProgramCareerCompanyController::class, 'edit'])->name('edit');
                        Route::put('', [ProgramCareerCompanyController::class, 'update'])->name('update');
                        Route::delete('', [ProgramCareerCompanyController::class, 'destroy'])->name('destroy');
                    });
                });
            });
        });
    });
    Route::prefix('section')->group(function (){
        Route::get('victory', [VictorySectionController::class, 'edit'])->name('victory-section-edit');
        Route::patch('victory', [VictorySectionController::class, 'update'])->name('victory-section-update');

        Route::resource('testimoni', TestimonyController::class);
        Route::resource('company', AlumnyCompanyController::class);
        Route::resource('faq', FaqController::class);
    });

    Route::prefix('setting')->name('setting.')->group(function (){
        Route::get('', [SettingController::class, 'edit'])->name('edit');
        Route::put('', [SettingController::class, 'update'])->name('update');
    });
});
Auth::routes();
Route::post('login', [LoginController::class, 'login'])->name('login-admin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout-admin');
