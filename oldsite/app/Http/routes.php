<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

// Guest
Route::get('/', 'GeneralController@index');
Route::get('cursos', 'GeneralController@courses');
Route::get('convocatoria', 'GeneralController@joinup');
Route::get('blog', 'GeneralController@blog');
Route::get('archivos/{file}', 'GeneralController@downloadFiles');
Route::get('temarios/{file}', 'GeneralController@downloadSyllabus');
Route::get('archivos/{file}', 'GeneralController@downloadGeneration');
// Se ejecuta con un ajax
Route::get('seeCart', 'CartController@seeCart');
// Auth
Route::auth();
// Middleware
Route::group(['middleware' => 'auth'], function() {
    // Cart    
    Route::post('addCart', 'CartController@addCart');
    Route::post('deleteCart', 'CartController@deleteCart');
    // Inscription
    Route::post('confirm', 'InscriptionController@confirm');
    Route::get('inscribir', 'InscriptionController@enroll');
    Route::get('bajaInscripcion/{id}', 'InscriptionController@delete');
    Route::get('recibo/{id}', 'InscriptionController@recibo');
    // Profile
    Route::get('perfil', 'GeneralController@perfil');
    Route::get('arduino', 'GeneralController@arduino');
    //Route::get('raspberry', 'GeneralController@raspberry');
    Route::get('logoutFlush', 'GeneralController@logoutFlush');
    // Admin
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
        Route::resource('', 'AdminController');
        
        Route::group(['prefix' => 'inscriptions'], function() {
            Route::resource('', 'InscriptionController');
            Route::get('seeInscriptions/{id}', 'InscriptionController@seeInscriptions');
            Route::get('seeInscriptionsByCourse/{id}', 'InscriptionController@seeInscriptionsByCourse');
            Route::get('seeInscription/{id}', 'InscriptionController@seeInscription');
            Route::post('confirmInscription', 'InscriptionController@confirmInscription');
        });
        
        Route::group(['prefix' => 'classes'], function() {
            Route::resource('', 'ClassController');
            Route::get('list/{id}', 'ClassController@inscriptionsByClass');
        });
        
        Route::resource('userstypes', 'UserTypeController');
        //Route::resource('users', 'UserController');
        //Route::resource('tags', 'TagController');
        //Route::resource('posts', 'PostController');
    });
});

