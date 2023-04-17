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

Route::get('/', '\App\Http\Controllers\HomeController@index')->name('home');

//Visualização dos clientes.
/*Route::get('/clientes', '\App\Http\Controllers\ClienteController@index')->name('clientes');
Route::get('/cliente', 'ClienteController@index')->name('user');*/

Route::controller(\App\Http\Controllers\ClienteController::class)->group(function () {
    Route::get('/clientes', 'index')->name('clientes');
    Route::get('/clientes/{id}', 'getCliente')->name('cliente');
    Route::post('/clientes/cadastrar', 'store')->name('inserir-dados');
    Route::put('/clientes/{id}', 'update')->name('cliente-update');
});
//Tela de cadastro de cliente.
Route::get('/cadastrar-cliente', '\App\Http\Controllers\ClienteController@cadastrarCliente')->name('cadastrar-cliente');