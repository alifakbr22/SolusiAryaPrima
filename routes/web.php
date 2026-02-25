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

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/cabang', 'pages.cabang')->name('cabang');
Route::view('/certification', 'pages.certification')->name('certification');
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
Route::view('/kontak', 'pages.contact')->name('contact');

Route::post('/kontak', [ContactController::class, 'store'])
    ->name('contact.store');

Route::get('/lang/{locale}', [\App\Http\Controllers\LanguageController::class, 'switch'])
    ->name('lang.switch');

Route::get('/test', function () {
    return 'OK';
});
