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

Route::get('/', 'SiteController@index');

Route::prefix('admin')->group(function () {

    Auth::routes();

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('team', 'TeamController');
        Route::resource('player', 'PlayerController');
        Route::resource('departure', 'DepartureController');
        Route::resource('user', 'UserController');
        Route::resource('activity', 'ActivityController');
    });
});

Route::prefix('user')->group(function () {

    Auth::routes();

    Route::group(['middleware' => ['auth:user']], function () {
        Route::get('/home', 'HomeController@index')->name('home');

        Route::resource('climb', 'ClimbController');
    });
});