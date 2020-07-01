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

Route::get('/Home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/regi', function () {
    return view('form');
});

Route::get('/test', 'HomeController@Home');

Route::get('/register', 'AuthController@Register');

Route::get('/welcome', 'AuthController@Welcome');



