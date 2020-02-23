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
 *                      ADMIN ROUTES
 * ******************************************************************************/

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('login.submit');
    Route::get('logout/', 'Auth\AdminLoginController@logout')->name('logout');
    Route::get('/', 'AdminController@index')->name('dashboard');
   }) ;

/*******************************************************************************
 *                      USER ROUTES
 * ******************************************************************************/

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


/*******************************************************************************
 *                      GUEST ROUTES
 * ******************************************************************************/

Route::get('/', 'GuestController@welcome')->name('welcome');

Route::get('/convocatoria','GuestController@convocatoria')->name('convocatoria');

/*******************************************************************************
 *                      OTHER ROUTES
 * ******************************************************************************/

Route::resource('cursos','CursoController');
