<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/portfolio', function(){
    return view('portfolio');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/cv', 'App\Http\Controllers\CvController@index')->name('cv');
