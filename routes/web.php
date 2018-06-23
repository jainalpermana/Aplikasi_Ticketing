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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('rute', 'RuteController');

Route::resource('costomer', 'CostomerController');

Route::resource('trans', 'TransController');

Route::resource('reservation', 'ReservationController');

Route::get('rutequery', 'RuteController@search');

Route::get('cosquery', 'CostomerController@search');

Route::get('transquery', 'TransController@search');

Route::get('reserquery', 'ReservationController@search');