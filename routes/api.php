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

Route::namespace('Api')->name('api.')->group(function(){
    Route::get('/pessoas', [\App\Http\Controllers\Api\PessoaController::class, 'index']);
    Route::get('/shiporders', [\App\Http\Controllers\Api\ShiporderController::class, 'index']);
    Route::get('/shiptos', [\App\Http\Controllers\Api\ShiptoController::class, 'index']);
    Route::get('/items', [\App\Http\Controllers\Api\ItemController::class, 'index']);
    Route::get('/phones', [\App\Http\Controllers\Api\PhoneController::class, 'index']);
});
