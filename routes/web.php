<?php

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
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});


Route::get('/check', 'PostController@create')->name('post.create');

Route::post('/post', 'PostController@store')->name('post.store');

Route::get('/grab', 'GrabList@grab')->name('grab');
