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


Route::post('reporte/diario',"MedidoresController@diario")->name('api.diario');

Route::post('reporte/semanal',"MedidoresController@semanal")->name('api.semanal');

Route::post('reporte/periodo',"MedidoresController@periodo")->name('api.periodo');