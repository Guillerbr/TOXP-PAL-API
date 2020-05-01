<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/empresas-cadastro', 'EmpresaController@index');
Route::get('/empresas-cadastro/{id}', 'EmpresaController@show');
Route::post('/empresas-cadastro', 'EmpresaController@store');
Route::post('/empresas-cadastro/{id}/answers', 'EmpresaController@answer');
Route::delete('/empresas-cadastro/{id}', 'EmpresaController@delete');
Route::delete('/empresas-cadastro/{id}/answers', 'EmpresaController@resetAnswers');
