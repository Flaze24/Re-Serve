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

Route::get('/', 'PagesController@index')->name("index");

Route::get('pages.about','PagesController@about')->name("about");

Route::get('pages.cancel', 'PagesController@cancel')->name("cancel");

Route::resource('message','MessagesController');

Route::get('login','Auth\LoginController@showLoginForm')->name('login');

Route::get('register','Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('login','Auth\LoginController@login');

Route::post('register','Auth\RegisterController@register');

Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::resource('restaurant','RestaurantsController');

Route::resource('reserve','ReservesController');

//Dashboard

Route::resource('user','UserController');
Route::resource('backreserve','BackReserveController');
Route::get('pages.restaurant','PagesController@restaurant')->name('restaurants');
Route::get('pages.dashindex','PagesController@dashindex')->name('dashIndex');