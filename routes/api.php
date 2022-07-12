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

Route::get('/blogs', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('/productos', [\App\Http\Controllers\ProductoController::class, 'index']);
Route::post('/productos', [\App\Http\Controllers\ProductoController::class, 'store']);
Route::post('/productos-actualizar', [\App\Http\Controllers\ProductoController::class, 'update']);
Route::post('/productos-eliminar', [\App\Http\Controllers\ProductoController::class, 'destroy']);
Route::get('/categorias', [\App\Http\Controllers\CategoriaController::class, 'index']);

