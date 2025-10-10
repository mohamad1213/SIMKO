<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\BeritaController;


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
    Route::get('anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
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


Route::get('/keanggotaan', [AnggotaController::class, 'index_frontend'])->name('keanggotaan');
Route::get('/galeris', [GaleriController::class, 'show2'])->name('galeri.index');
Route::get('/kegiatan', [BeritaController::class, 'index_frontend'])->name('berita.index');
Route::get('/kegiatan/{slug}', [BeritaController::class, 'show_frontend'])->name('berita.show');

Route::middleware(['auth'])->group(function () {
    Route::get('galeri', [GaleriController::class, 'index'])->name('admin.galeri.index');
    Route::get('/galeri/create', [GaleriController::class, 'create'])->name('admin.galeri.create');
    Route::post('galeri', [GaleriController::class, 'store'])->name('admin.galeri.store'); 
    Route::get('/galeri/{id}/edit', [GaleriController::class, 'edit'])->name('admin.galeri.edit');
    Route::put('/galeri/{id}', [GaleriController::class, 'update'])->name('admin.galeri.update');
    Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])->name('admin.galeri.destroy');
    Route::get('/galeri/{id}', [GaleriController::class, 'show'])->name('admin.galeri.show');


    Route::get('/prestasi', [PrestasiController::class, 'index'])->name('admin.prestasi.index');
    Route::get('/prestasi/create', [PrestasiController::class, 'create'])->name('admin.prestasi.create');
    Route::post('/prestasi', [PrestasiController::class, 'store'])->name('admin.prestasi.store');
    Route::get('/prestasi/{id}', [PrestasiController::class, 'show'])->name('admin.prestasi.show');
    Route::get('/prestasi/{id}/edit', [PrestasiController::class, 'edit'])->name('admin.prestasi.edit');
    Route::put('/prestasi/{id}', [PrestasiController::class, 'update'])->name('admin.prestasi.update');
    Route::delete('/prestasi/{id}', [PrestasiController::class, 'destroy'])->name('admin.prestasi.destroy');

    Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('admin.berita.show');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');
});
