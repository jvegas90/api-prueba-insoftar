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
Route:: get('usuarios','UsuariosController@getAll') ->name ('muestratodalatabla');
Route:: post('usuarios','UsuariosController@add') ->name ('registrar');
Route:: get('usuarios/{cedula}','UsuariosController@get') ->name ('mostrarporid');
Route:: post('usuarios/{cedula}','UsuariosController@edit') ->name ('editarcampo');
Route:: get('usuarios/delete/{cedula}','UsuariosController@delete');