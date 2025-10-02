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
        return view('dashboard.index_admin');
    } else {
        return view('dashboard.index_user');
    }
})->name('dashboard');


// khusus admin
Route::middleware(['auth'])->group(function () {
    Route::get('anggota', [AnggotaController::class, 'index'])->name('anggota.index');
    Route::get('anggota/create', [AnggotaController::class, 'create'])->name('anggota.ceate');
    Route::get('anggota/{id}', [AnggotaController::class, 'show'])->name('anggota.show');
    Route::get('anggota/{id}/update', [AnggotaController::class, 'update'])->name('anggota.update');
    Route::post('anggota/{id}/verifikasi', [AnggotaController::class, 'verifikasi'])->name('anggota.verifikasi');
});
Route::resource('anggota', AnggotaController::class)->parameters([
    'anggota' => 'anggota'
]);


// Halaman utama untuk pengunjung
Route::get('/', function () {
    return view('landing'); // ganti dengan view yang kamu mau
})->name('home');

Route::get('/tentang', function () {
    return view('user.tentang');
})->name('tentang');
// Route::get('/keanggotaan', function () {
//     return view('user.keanggotaan');
// })->name('keanggotaan');
Route::get('/keanggotaan', [AnggotaController::class, 'search'])->name('keanggotaan');