<?php

use App\Http\Controllers\API\TareaController;
use App\Http\Controllers\AuthController;
use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->group(function () {
Route::apiResource('tareas', TareaController::class);});
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
