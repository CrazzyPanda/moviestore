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

Route::get('/', 'PageController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
Route::get('/customer/home', 'Customer\HomeController@index')->name('customer.home');

Route::resource('admin/movies', 'Admin\MovieController', array("as"=>"admin"));
Route::resource('admin/orders', 'Admin\OrderController', array("as"=>"admin"));
Route::resource('admin/users', 'Admin\UserController', array("as"=>"admin"));

Route::resource('customer/orders', 'Customer\OrderController', array("as"=>"customer"));
Route::resource('customer/profiles', 'Customer\ProfileController', array("as"=>"customer"));

Route::get('/movies', 'MovieController@index')->name('movies.index');
Route::get('/movies/{id}', 'MovieController@show')->name('movies.show');
Route::get('/genres/{id}', 'GenreController@show')->name('genres.show');
Route::get('/basket', 'BasketController@view')->name('basket.view');
Route::post('/basket', 'BasketController@add')->name('basket.add');
