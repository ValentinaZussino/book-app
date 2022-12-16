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
    return view('home');
});

Route::get('/libri', function () {
    $libri = ['titolo' => 'titolo 1', 'autore' => 'autore 1'];
    // dd(compact('libri'));
    return view('pages.libri', compact('libri'));
});
