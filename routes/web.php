<?php

use \App\Http\Controllers\MachinesController;
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

/*Route::get('/', [MachinesController::class, 'index']);
Route::get('/listar-maquinas', [MachinesController::class, 'index']);

Route::get('/visualizar-maquina/{id}', [MachinesController::class, 'show']);

Route::get('/cadastrar-maquina', [MachinesController::class, 'create']);
Route::post('/cadastrar-maquina', [MachinesController::class, 'store']);
*/

Route::resource('maquinas', MachinesController::class);
