<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("/");

Route::get('/album/{album_name}', function ($album_name) {
    return view('/album/'.$album_name);
})->name("album");

Route::post('/contact', 'ContactController@contact');
