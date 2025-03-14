<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/signin', [AuthController::class, 'showLoginForm'])->name('signin');

Route::get('/', function () {
    return view('home'); // Sesuai dengan nama file Blade
})->name('home');

// Route untuk halaman Beli Robux
Route::get('/beli-robux', function () {return view('belirobux');})->name('beli.robux'); // Pastikan file belirobux.blade.php ada di resources/views/
Route::post('/beli-robux', 'BeliRobuxController@store');

// Route untuk halaman Cara Membeli
Route::get('/cara-membeli', function () {
    return view('caramembeli'); // Sesuai dengan nama file tanpa .blade.php
})->name('caramembeli');

