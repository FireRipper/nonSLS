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

Route::get('/', 'MainController@getMain')->name('main');
Route::get('services', 'MainController@getServices')->name('services');
Route::get('contacts', 'MainController@getContact')->name('contacts');
Route::get('request', 'MainController@getRequest')->name('request');

Route::get('/home', 'HomeController@index')->name('home');

Route::put('profile', 'ProfileController@update')->name('profile-update');

Route::post('/', 'CommentController@store');

Route::post('request', 'RequestController@store');

Route::group(['prefix' => 'panel', 'middleware' => 'only.admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('users', 'UserController@index')->name('admin-user');

    Route::group(['prefix' => 'technical-tasks'], function () {
        Route::get('/', 'TechnicalTaskController@index')->name('admin-task');
        Route::post('apply', 'TechnicalTaskController@store')->name('admin-task-apply');
    });

    Route::group(['prefix' => 'comments'], function () {
        Route::delete('{id}', 'CommentController@destroy')->name('panel.comments.delete');
    });

    Route::group(['prefix' => 'requests'], function () {
        Route::get('/', 'RequestController@index')->name('admin-request');
        Route::get('read-requests', 'ReadRequestController@index')->name('admin-read-request');

        Route::group(['prefix' => '{request}/reports'], function () {
            Route::get('/', 'ReportController@index')->name('admin-report');
            Route::post('/', 'RequestFileController@store')->name('requests.reports.store');
            Route::get('{report}', 'RequestFileController@download')->name('requests.reports.download');
            Route::put('{report}', 'RequestFileController@update')->name('requests.reports.update');
            Route::delete('{report}', 'RequestFileController@destroy')->name('requests.reports.destroy');
        });
    });
});
