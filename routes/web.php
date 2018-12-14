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

Route::get('/send', 'ApiController@send');
Route::get('/map_android', 'ApiController@map_android')->name('map_android');
Route::get('/map_desktop', 'ApiController@map_desktop')->name('map_desktop');
Route::get('/{user_id}/{x}/{y}', 'ApiController@sendData');
Route::get('/{user_id}', 'ApiController@user_id');
Route::get('/{user_id}/{x}', 'ApiController@x');
