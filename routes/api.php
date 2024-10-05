<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get(uri: '/cliente', action: [ClienteController::class, 'listar']);
Route::get(uri: '/cliente/{id}', action: [ClienteController::class, 'buscarPeloId']);

Route::post(uri: '/cliente', action: [ClienteController::class, 'criar']);

Route::put(uri: '/cliente/{id}', action: [ClienteController::class, 'atualizar']);

Route::delete(uri: '/cliente/{id}', action: [ClienteController::class, 'deletar']);

