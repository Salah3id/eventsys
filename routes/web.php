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

Route::get('/wl', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/illia/{id?}', 'HomeController@illia')->name('illia');
Route::get('/','siteController@mdracity')->name('home');
Route::get('/add_your_pic','siteController@add_your_pic')->name('add_your_pic');
