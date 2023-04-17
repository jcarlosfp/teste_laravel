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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/cadastrar', '\App\Http\Controllers\ClienteApiController@store')->name('inserir-dados-api');
Route::get('/clientes', '\App\Http\Controllers\ClienteApiController@index')->name('clientes-api');
Route::put('/cliente/{cliente}', '\App\Http\Controllers\ClienteApiController@update')->name('update-clientes-api');
Route::delete('/cliente/{cliente}', '\App\Http\Controllers\ClienteApiController@destroy')->name('delete-clientes-api');
