<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('jwt.auth')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
});

Route::get('/siswas', [SiswaController::class, 'index']);
Route::post('/siswas', [SiswaController::class, 'store']);
Route::get('/siswas/{id}', [SiswaController::class, 'show']);
Route::put('/siswas/{id}', [SiswaController::class, 'update']);
Route::delete('/siswas/{id}', [SiswaController::class, 'destroy']);