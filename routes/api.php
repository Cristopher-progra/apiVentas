<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/cliente/select', [ClienteController::class, 'select' ]);
Route::post('/cliente/store', [ClienteController::class, 'store' ]);Route::put('/cliente/update/{id}', [ClienteController::class, 'update' ]);
Route::delete('/cliente/delete/{id}', [ClienteController::class, 'delete' ]);
Route::get('/cliente/find/{id}', [ClienteController::class, 'find' ]);
// Rutas para gestionar la tabla Pais
Route::get('/pais/select', [PaisController::class, 'select' ]);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
