<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {return view('home');})->name('home');

Route::get('/about', function () {return view('about');})->name('about');

Route::get('/product', function () {return view('product');})->name('product');

// Route::get('/blog', function () {return view('blognews');})->name('blognews');

    Route::get('/tickets/{tiket}', [TiketController::class, 'show'])->name('tickets.show');
    Route::post('/tickets/{tiket}/order', [TiketController::class, 'order'])->name('tickets.order');


Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/registration-success', function () {
    return view('tikets.index');
})->name('registration.success');

Route::get('/blog', [NewsController::class, 'index'])->name('blognews');
