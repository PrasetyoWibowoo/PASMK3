<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::resource('tikets', TiketController::class);