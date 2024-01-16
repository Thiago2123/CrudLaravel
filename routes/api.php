<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiMachinesController;


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


// Route::apiResource('maquinas', '\app\Http\Controllers\Api\ApiMachinesController::class');
Route::get('maquinas', [ApiMachinesController::class, 'index']);
Route::get('maquinas/{id}', [ApiMachinesController::class, 'show']);
Route::post('maquinas', [ApiMachinesController::class, 'store']);
Route::put('maquinas/{id}/editar', [ApiMachinesController::class, 'update']);
Route::delete('maquinas/{id}/delete', [ApiMachinesController::class, 'destroy']);

