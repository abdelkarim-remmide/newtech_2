<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cache', function(){
    $exitCode = \Illuminate\Support\Facades\Artisan::call('config:cache');
    dd('jj');
});

Route::get('/', 'landingPageController@index')->name('index');
Route::get('/product-category', 'CategoryPageController@index')->name('category.index');
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
    Route::patch('/my-profile', 'UsersController@update')->name('users.update');
    Route::get('/my-orders', 'OrdersController@index')->name('orders.index');
    Route::get('/order/{order}', 'OrdersController@show')->name('orders.show');
});
Route::get('/guestcheckout', 'CheckoutController@index')->name('guestcheckout.index');
Route::get('/order/{order}', 'OrdersController@show')->name('ordersstatus.show');
Route::get('/confirm/{order}', 'CheckoutController@edit')->name('guestcheckout.edit');
Route::get('/refund/{order}', 'CheckoutController@refund')->name('guestcheckout.refund');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/sendmail/{id}', 'CheckoutController@sendEmail')->name('sendmail');
Route::get('/downloadPDF/{id}','CheckoutController@downloadPDF')->name('downloadPDF');
Route::get('/showPDF/{id}','CheckoutController@showPDF')->name('showPDF');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::get('/product/{product}', 'CategoryPageController@show')->name('category.show');
Route::get('/post/{post}', 'BlogController@show')->name('blog.show');
Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/fail', 'CheckoutController@fail')->name('checkout.fail');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/search', 'CategoryPageController@search')->name('search');

Route::get('/search-algolia', 'CategoryPageController@searchAlgolia')->name('search-algolia');
