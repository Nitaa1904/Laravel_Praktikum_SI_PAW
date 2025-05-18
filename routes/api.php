<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

// Semua endpoint API kamu letakkan di sini
Route::get('/siswas', [SiswaController::class, 'index']);
Route::post('/siswas', [SiswaController::class, 'store']);
Route::get('/siswas/{id}', [SiswaController::class, 'show']);
Route::put('/siswas/{id}', [SiswaController::class, 'update']);
Route::delete('/siswas/{id}', [SiswaController::class, 'destroy']);