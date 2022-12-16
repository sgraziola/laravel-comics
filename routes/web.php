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
    $data = [
        'title' => 'Welcome to DC Comics',
        'intro' => 'DC Comics lorem ipsum dolor'
    ];
    return view('home', $data);
})->name('home');

Route::get('/comics', function () {
    $comics = config('db.comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/characters', function () {
    $data = [];
    return view('characters', $data);
})->name('characters');

Route::get('/movies', function () {
    $data = [];
    return view('movies', $data);
})->name('movies');

Route::get('/tv', function () {
    $data = [];
    return view('tv', $data);
})->name('tv');

Route::get('/games', function () {
    $data = [];
    return view('games', $data);
})->name('games');

Route::get('/collectibles', function () {
    $data = [];
    return view('collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () {
    $data = [];
    return view('videos', $data);
})->name('videos');

Route::get('/fans', function () {
    $data = [];
    return view('fans', $data);
})->name('fans');

Route::get('/news', function () {
    $data = [];
    return view('news', $data);
})->name('news');

Route::get('/shop', function () {
    $data = [];
    return view('shop', $data);
})->name('shop');
