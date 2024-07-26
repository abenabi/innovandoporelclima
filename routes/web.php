<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\EstacionController;
use App\Http\Controllers\InstrumentoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [MapController::class, 'index']);
Route::get('/estacion/{id}', [EstacionController::class, 'consultar_estacion']);
Route::get('/instrumento/{id}', [InstrumentoController::class, 'consultar_instrumento']);

