<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MediaSocialController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Website\WebAboutController;
use App\Http\Controllers\Website\WebContactController;
use App\Http\Controllers\Website\WebHomeController;
use App\Http\Controllers\Website\WebPortfolioController;
use App\Http\Controllers\Website\WebServiceController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

// ========================
// SITEMAP ROUTE
// ========================
Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/')
            ->setLastModificationDate(now())
            ->setChangeFrequency('daily')
            ->setPriority(1.0))
        ->add(Url::create('/portfolio')->setChangeFrequency('monthly'))
        ->add(Url::create('/artikel')->setChangeFrequency('daily'))
        ->add(Url::create('/cara-order')->setChangeFrequency('monthly')->setPriority(0.7));

    // Simpan ke file public/sitemap.xml agar bisa diakses oleh Google
    $sitemap->writeToFile(public_path('sitemap.xml'));

    // Tampilkan hasil langsung di browser
    return response()->file(public_path('sitemap.xml'));
});

Route::get('/manage-cms', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/manage-cms', [AuthController::class, 'login'])
    ->name('manage.attempt');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/generate-sitemap', [SitemapController::class, 'generate'])->name('sitemap.generate');
    Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboards.index');
    Route::get('/settings/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::post('/settings/contacts', [ContactController::class, 'store'])->name('contacts.store');
    Route::resource('/settings/mediasocial', MediaSocialController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/brands', BrandController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/portfolios', PortfolioController::class);
});

Route::get('/', [WebHomeController::class, 'index'])->name('home');
Route::get('/about-us', [WebAboutController::class, 'index'])->name('about');
Route::get('/portfolio', [WebPortfolioController::class, 'index'])->name('portfolio');
Route::get('/contact-us', [WebContactController::class, 'index'])->name('contact');
Route::get('/{slug}', [WebServiceController::class, 'show'])->name('show.service');
