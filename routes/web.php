<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;




Route::get('/', [HomeController::class, 'home']); 

Route::middleware(['auth', 'verified'])->group(function () { 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [DashboardController::class, 'store'])->name('dashboard.store');
    Route::delete('/dashboard/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/beasiswa', function () {
    return view('beasiswa');
});

// Route::get('/beasiswa/kipk', function () {
//     return view('kipk');
// });

// Route::get('/beasiswa/prestasi', function () {
//     return view('prestasi');
// });

// Route::get('/beasiswa/koperasi', function () {
//     return view('koperasi');
// });

// Route::get('/beasiswa/perusahaan', function () {
//     return view('perusahaan');
// });

// Route::get('/beasiswa/tahfidz', function () {
//     return view('tahfidz');
// });

// Route::get('/beasiswa/walikota', function () {
//     return view('walikota');
// });
