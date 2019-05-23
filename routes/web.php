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
    return view('index');
});
Route::get('/golomori', function () {
    return view('golomori');
});
Route::get('/tananaga', function () {
    return view('tananaga');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
