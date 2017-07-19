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

/*Route::get('/', function () {
    return view('www.index');
});*/

Route::get('/','HomeController@index')->name('index');
Route::get('gallery','HomeController@gallery')->name('gallery');
Route::get('contact','HomeController@contact')->name('contact');

Route::get('admin/index', 'AdminController@index')->name('admin');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin','AdminController');