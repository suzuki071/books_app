<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/top', function () {
//     return view('top');
// });

Route::get('/top', [TopController::class, 'top']);
Route::post('/top', [TopController::class, 'post']);
