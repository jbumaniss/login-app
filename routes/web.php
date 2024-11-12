<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/remember-me', [AuthController::class, 'rememberMe'])->name('rememberMe');
Route::post('/register', [AuthController::class, 'register'])->name('register');
