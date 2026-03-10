<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Company Profile - Solusi Arya Prima
|--------------------------------------------------------------------------
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::get('/services', [\App\Http\Controllers\PageController::class, 'services'])->name('services');
Route::get('/cabang', [\App\Http\Controllers\PageController::class, 'cabang'])->name('cabang');
Route::view('/certification', 'pages.certification')->name('certification');
Route::get('/portfolio', [\App\Http\Controllers\PageController::class, 'portfolio'])->name('portfolio');
Route::view('/kontak', 'pages.contact')->name('contact');

Route::post('/kontak', [ContactController::class, 'store'])
    ->name('contact.store');

Route::get('/lang/{locale}', [\App\Http\Controllers\LanguageController::class, 'switch'])
    ->name('lang.switch');

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show');

Route::get('/test', function () {
    return 'OK';
});

Route::get('/run-migrations-live', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        return 'Migrasi berhasil! Database sudah diperbarui. <br><br> Silakan coba kirim pesan kontak lagi: <a href="/kontak">Buka Halaman Kontak</a>';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
