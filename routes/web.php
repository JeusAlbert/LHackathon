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

Route::get('/', function () { // localhost:8000
    return view('welcome');
});

Route::get('/sample', function () { // link to sample html localhost:8000/sample
    return view('sample'); // @Albert this is the sample html
});

Route::get('/testmap', "MapController@index");
