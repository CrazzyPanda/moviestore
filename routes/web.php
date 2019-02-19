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
Route::resource('admin/movies', 'Admin\MovieController', array("as"=>"admin"));
Route::resource('admin/orders', 'Admin\OrderController', array("as"=>"admin"));
Route::get('admin/reviews/{id}', 'Admin\ReviewController@index')->name('admin.reviews.index');
Route::resource('admin/users', 'Admin\UserController', array("as"=>"admin"));

Route::get('/customer/home', 'Customer\HomeController@index')->name('customer.home');
Route::resource('customer/orders', 'Customer\OrderController', array("as"=>"customer"));
// Route::resource('customer/profiles', 'Customer\ProfileController', array("as"=>"customer"));
Route::get('customer/profile/', 'Customer\ProfileController@show')->name('customer.profile.show');
Route::get('customer/profile/edit', 'Customer\ProfileController@edit')->name('customer.profile.edit');
Route::put('customer/profile', 'Customer\ProfileController@update')->name('customer.profile.update');

Route::get('customer/reviews/create', 'Customer\ReviewController@create')->name('customer.reviews.create');

Route::get('/movies', 'MovieController@index')->name('movies.index');
Route::get('/movies/{id}', 'MovieController@show')->name('movies.show');
Route::get('/genres/{id}', 'GenreController@index')->name('genres.show');
Route::get('/basket', 'BasketController@view')->name('basket.view');
Route::post('/basket', 'BasketController@add')->name('basket.add');
Route::get('/basket/edit', 'BasketController@edit')->name('basket.edit');
Route::put('/basket', 'BasketController@update')->name('basket.update');

Route::post('/search', 'MovieController@search')->name('search');

Route::get('/basket/checkout', 'BasketController@checkout')->name('basket.checkout');
Route::put('/basket/pay', 'BasketController@pay')->name('basket.pay');
// Route::resource('/basket', 'BasketController', array("as"=>"basket"));
