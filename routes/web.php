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

Route::get('/album/Club-Square-Belgrade-{album_name}', function ($album_name) {
    return view('/album/'.$album_name);
})->name("album");

/*
Route::get('/online-reservation/{result}', function ($result) {
    return view('result', ['result' => $result]);
})->name("online-reservation");
 */

Route::post('/reserve', 'ContactController@reserve');
