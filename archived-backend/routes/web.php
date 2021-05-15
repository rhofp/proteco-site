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

Route::get('/','WelcomeController@welcome')->name('welcome');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('verified');
Route::post('/cart', 'CartController@store')->name('cart.store')->middleware('verified');
Route::delete('/cart/del/{course}', 'CartController@destroy')->name('cart.destroy')->middleware('verified');
Route::get('/empty',function ()
{
  Cart::destroy();
});
