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

dd(strlen(htmlentities('Water Pump & Housing 41011 Mazda Tribute MPV & Ford Escape 3.0 V6 00/01/02/03')));

Route::get('/publish', 'EbayController@publish');
