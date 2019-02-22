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

//---------- customer profile controller ---------- //
Route::get('customer/profile/', 'Customer\ProfileController@show')->name('customer.profile.show');
Route::get('customer/profile/edit', 'Customer\ProfileController@edit')->name('customer.profile.edit');
Route::put('customer/profile', 'Customer\ProfileController@update')->name('customer.profile.update');

//---------- customer review controller ---------- //
Route::get('movies/{id}/reviews/create', 'Customer\ReviewController@create')->name('movies.reviews.create');
Route::post('movies/{id}/reviews', 'Customer\ReviewController@store')->name('movies.reviews.store');
Route::get('/movies/{id}/reviews/{rid}/edit', 'Customer\ReviewController@edit')->name('movies.reviews.edit');
Route::put('customer/{id}/reviews/{rid}', 'Customer\ReviewController@update')->name('movies.reviews.update');
Route::delete('customer/{id}/reviews/{rid}', 'Customer\ReviewController@delete')->name('movies.reviews.delete');

Route::get('/movies', 'MovieController@index')->name('movies.index');
Route::get('/movies/{id}', 'MovieController@show')->name('movies.show');
Route::post('/search', 'MovieController@search')->name('search');
Route::get('/genres/{id}', 'GenreController@index')->name('genres.show');

//---------- basket controller ---------- //
Route::get('/basket', 'BasketController@view')->name('basket.view');
Route::post('/basket', 'BasketController@add')->name('basket.add');
Route::get('/basket/edit', 'BasketController@edit')->name('basket.edit');
Route::put('/basket', 'BasketController@update')->name('basket.update');
Route::get('/basket/checkout', 'BasketController@checkout')->name('basket.checkout');
Route::put('/basket/pay', 'BasketController@pay')->name('basket.pay');
Route::get('/basket/confirmation/{id}', 'BasketController@confirmation')->name('basket.confirmation');
