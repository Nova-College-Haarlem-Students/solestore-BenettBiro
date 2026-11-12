<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/over', function () {
    return view('over');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/brands', [CategoryController::class, 'index']);