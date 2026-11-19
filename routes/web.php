<?php

use App\Http\Controllers\sneakerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/over', function () {
    return view('over');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/brands', [BrandController::class, 'index']);
Route::get('/brands/{id}', [BrandController::class, 'show']);
Route::get('/sneakers', [sneakerController::class, 'sneakers']);
Route::get('/sneakers/{id}', [sneakerController::class, 'show']);