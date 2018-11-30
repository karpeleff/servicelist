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
Route::get('/service', 'Service\ServiceController@index')->name('service');
Route::get('/search', 'Service\ServiceController@search')->name('search');
Route::get('/add', 'Service\ServiceController@add')->name('add');

