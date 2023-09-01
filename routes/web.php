<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MoviesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('/movie/{movie}', 'movie')->name('movie');
    Route::get('/category/{category}', 'category')->name('category');
});