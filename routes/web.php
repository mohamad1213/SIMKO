<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

Route::get('login', [AuthController::class, 'loginForm'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess'])->name('login.process');

Route::get('register', [AuthController::class, 'registerForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.process');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// proteksi route
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('index'); // <-- arahkan ke index.blade.php
    })->name('dashboard');
});


Route::resource('anggota', AnggotaController::class);
