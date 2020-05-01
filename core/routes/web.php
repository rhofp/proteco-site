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

/*******************************************************************************
 *                      USER ROUTES
 * ******************************************************************************/

Auth::routes(['verify' => true]);

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/', 'AdminController@index')->name('dashboard');
});

//Route::view('/{any}','spa')->where('any','.*');
Route::any('{all}', function (){
    return view('spa');
})->where('all', '^(?!api).*$');

/*******************************************************************************
 *                      ADMIN ROUTES
 * ******************************************************************************/

/*Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('logout');
}) ;*/
