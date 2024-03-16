<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SearchController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SearchController::class, 'index'])->name('home');
Route::post('/search', [SearchController::class, 'search'])->name('search');