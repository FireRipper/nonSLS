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

Route::post('request', 'RequestController@store');

Route::group(['prefix' => 'panel', 'middleware' => 'only.admin'], function () {
    Route::get('/','AdminController@index')->name('admin');

    Route::get('technical-tasks', 'TechnicalTaskController@index')->name('admin-task');

    Route::post('technical-tasks/apply', 'TechnicalTaskController@store')->name('admin-task-apply');

    Route::delete('{id}/delete-success', 'CommentController@destroy')->name('del-comment');

    Route::get('users', 'UserController@index')->name('admin-user');

    Route::group(['prefix' => 'requests'], function () {
        Route::get('/','RequestController@index')->name('admin-request');
        Route::get('read-requests', 'ReadRequestController@index')->name('admin-read-request');
        Route::get('{request}/reports', 'ReportController@index')->name('admin-report');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::put('profile', 'ProfileController@update')->name('profile-update');


