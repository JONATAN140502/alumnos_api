<?php

use App\Http\Controllers\EscuelaController;
use App\Http\Controllers\FacultadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\LoginApiController;
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
//ruta de logeo para obtener token
Route::post('/login', [LoginApiController::class, 'login']);
///rutas con token
Route::middleware(['auth:api'])->group(function () {
 Route::apiResource('facultad', FacultadController::class);
 Route::apiResource('escuela', EscuelaController::class);
 Route::apiResource('alumno', AlumnoController::class);
});