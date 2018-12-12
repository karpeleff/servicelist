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
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

//Service List

Route::get('/service', 'Service\ServiceController@index')->name('service');
Route::match(['get', 'post'],'/search', 'Service\ServiceController@search')->name('search');
Route::match(['get', 'post'],'/add', 'Service\ServiceController@add')->name('add');
Route::get('/done', 'Service\ServiceController@done')->name('done');
Route::post('/update', 'Service\ServiceController@update')->name('update');

//Oprs

 Route::match(['get', 'post'],'/oprs', 'Oprs\OprsController@index')->name('oprs');
Route::match(['get', 'post'],'/energy', 'Oprs\OprsController@energy')->name('energy');

Route::get('/oprs/test','Oprs\DocsController@test');