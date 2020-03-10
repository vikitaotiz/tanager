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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');


Route::get('menu', 'PagezController@menu')->name('pagez.menu');
Route::get('about', 'PagezController@about')->name('pagez.about');
Route::get('contact', 'PagezController@contact')->name('pagez.contact');

Route::resource('reservations', 'ReservationController');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::get('frontend', 'FrontendPageController@index')->name('frontend');

    Route::resource('categorymenus', 'CategorymenuController');
    Route::resource('menus', 'MenuController');

    Route::get('users', 'UserController@index')->name('users.index');

    Route::get('confirm/{id}', 'ReservationController@confirm')->name('confirm.reservation');
    Route::get('close/{id}', 'ReservationController@close')->name('close.reservation');
    Route::get('cancel/{id}', 'ReservationController@cancel')->name('cancel.reservation');

	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});



