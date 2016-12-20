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

Route::get('/album/club-square-belgrade-gallery-{album_name}', function ($album_name) {
    return view('/album/'.$album_name);
})->name("album");

/*
Route::get('/online-reservation/{result}', function ($result) {
    return view('result', ['result' => $result]);
})->name("online-reservation");
 */

Route::post('/reserve', 'ContactController@reserve');
/*
Route::get('/news', function () {
    return view('all-blogs');
})->name("blogs");

Route::get('/news/{blog_id}', function ($blog_id) {
    return view('/blogs/single-blog');
})->name("blog");
 */