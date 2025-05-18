<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('siswa', SiswaController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (!session()->has('user')) {
        return redirect()->route('login');
    }
    return view('dashboard');
})->name('dashboard');