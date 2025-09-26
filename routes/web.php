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
Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return view('admin.index');
    } else {
        return view('user.index');
    }
})->name('dashboard');


Route::resource('anggota', AnggotaController::class);
