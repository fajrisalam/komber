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

Route::get('/{user_id}/{x}/{y}', 'ApiController@sendData');
// Route::get('/{user_id}/{x}', 'ApiController@send1');
// Route::get('/{user_id}/{x}/{y}', 'ApiController@send2');
Route::get('/send', 'ApiController@send');
Route::get('/map', 'ApiController@map');

