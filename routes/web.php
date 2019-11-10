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

Route::get('/preloginpage', function () { // link to sample html localhost:8000/sample
    return view('preloginpage'); // @Albert this is the sample html
});

Route::get('/loginpage', function () { // link to sample html localhost:8000/sample
    return view('loginpage'); // @Albert this is the sample html
});

Route::get('/registerpage', function () { // link to sample html localhost:8000/sample
    return view('registerpage'); // @Albert this is the sample html
});

Route::get('/userpage', function () { // link to sample html localhost:8000/sample
    return view('userpage'); // @Albert this is the sample html
});

Route::get('/modeofpayment', function () { // link to sample html localhost:8000/sample
    return view('modeofpayment'); // @Albert this is the sample html
    
});


Route::get('/aboutuspage', function () { // link to sample html localhost:8000/sample
    return view('aboutuspage'); // @Albert this is the sample html
    
});


Route::get('/testmap', "MapController@index");
