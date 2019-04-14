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
//Route::resource('component', 'Service\ComponentController');
//Components
Route::match(['get', 'post'],'/searchcomponent', 'Service\ComponentController@search')->name('search');
Route::get('/storecomponent', 'Service\ComponentController@index')->name('index');
Route::post('/storecomponent', 'Service\ComponentController@store')->name('store');

//towork
Route::post('/towork', 'Service\ServiceController@towork')->name('towork');




//Notes
Route::post('/dellnote','Service\NotesController@dellnote')->name('dellnote');
Route::match(['get', 'post'],'/addnote', 'Service\NotesController@add')->name('addnote');
Route::match(['get', 'post'],'/allnotes', 'Service\NotesController@all')->name('allnotes');
Route::match(['get', 'post'],'/searchnotes', 'Service\NotesController@search')->name('searchnotes');