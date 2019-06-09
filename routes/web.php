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

Route::get('/', 'SiteController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::resource('team', 'TeamController');
    Route::resource('player', 'PlayerController');
    Route::resource('departure', 'DepartureController');
    Route::resource('user', 'UserController');
    Route::resource('activity', 'ActivityController');
});
