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

Route::get('/', 'MainController@getMain')->name('main');

Route::post('/','CommentController@store');

Route::get('services', 'MainController@getServices')->name('services');

Route::get('contacts', 'MainController@getContact')->name('contacts');

Route::get('request', 'MainController@getRequest')->name('request');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

