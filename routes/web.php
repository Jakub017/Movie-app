<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ProfileController;

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

Route::controller(PagesController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('/movie/{movieId}', 'movie')->name('movie');
    Route::get('/category/{categoryId}', 'category')->name('category');
    Route::get('/search', 'search')->name('search');
    Route::get('/watchlist', 'watchlist')->middleware(['auth', 'verified'])->name('watchlist');
    Route::get('/favourites', 'favourites')->middleware(['auth', 'verified'])->name('favourites');
});

Route::controller(GoogleController::class)->group(function() {
    Route::get('google/redirect', 'redirect')->name('google.redirect');
    Route::get('google/callback', 'callback')->name('google.callback');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
