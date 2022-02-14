<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('guests.home_undefined');
})->name('home');

Route::get('/characters', function () {
    return view('guests.home_undefined');
})->name('characters');

Route::get('/comics', function () {
    $data = ['comics' => config('my_config.comics')];
    return view('guests.home_comics', $data);
})->name('comics');

Route::get('/movies', function () {
    return view('guests.home_undefined');
})->name('movies');

Route::get('/tv', function () {
    return view('guests.home_undefined');
})->name('tv');

Route::get('/games', function () {
    return view('guests.home_undefined');
})->name('games');

Route::get('/collectibles', function () {
    return view('guests.home_undefined');
})->name('collectibles');

Route::get('/video', function () {
    return view('guests.home_undefined');
})->name('video');

Route::get('/fans', function () {
    return view('guests.home_undefined');
})->name('fans');

Route::get('/news', function () {
    return view('guests.home_undefined');
})->name('news');

Route::get('/shop', function () {
    return view('guests.home_undefined');
})->name('shop');
