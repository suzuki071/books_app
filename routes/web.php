<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/top', function () {
//     return view('top');
// });

Route::get('/top', [TopController::class, 'top']);
Route::post('/top', [TopController::class, 'post']);

Route::get('/regist', [RegisterController::class, 'regist']);
Route::post('/login', [RegisterController::class, 'login']);