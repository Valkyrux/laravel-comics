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

Route::get('/comics', function () {
    $data = ['comics' => config('my_config.comics')];
    return view('guests.home_comics', $data);
})->name('comics');
// undefined routes
Route::get('/', function () {
    return view('guests.home_undefined');
})->name('home');

Route::get('/characters', function () {
    return view('guests.home_undefined');
})->name('characters');

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
// end undefined routes

Route::get('/comics/{id}', function ($id) {
    $choosed_comic = collect(config('my_config.comics'))->firstWhere('id', $id);
    if (!empty($choosed_comic)) {
        return view('guests.comic_highlight', $choosed_comic);
    } else {
        abort('404');
    }
})->name('comic');
