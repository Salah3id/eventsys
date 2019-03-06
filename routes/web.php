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


Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/','siteController@home')->name('home');
Route::middleware('auth')->get('/add_your_pic','HomeController@add_your_pic')->name('add_your_pic');
