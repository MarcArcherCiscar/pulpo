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
Route::group(['middleware' => ['cors']], function () {
    //Rutas a las que se permitirá acceso
    Route::get('/', 'App\Http\Controllers\ServiciosController@index');
    Route::post('services/create', 'App\Http\Controllers\ServiciosController@store');
});
