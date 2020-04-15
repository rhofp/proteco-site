<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login','api\v1\auth\LoginController@store');
Route::delete('/logout', 'api\v1\auth\LoginController@destroy')->middleware('auth:api');
Route::post('/register','api\v1\auth\RegisterController');
Route::apiResource('/cursos','api\v1\CursoController');
Route::apiResource('cursos.grupos', 'GrupoController')->shallow();

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
