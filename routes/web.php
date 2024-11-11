<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\SoalController;

Route::get('/', function () {
    return Inertia::render('HomeView', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/tes-gaya-belajar', function () {
    return Inertia::render('TesGayaBelajarView');
})->name('tes-gaya-belajar');

Route::get('/gaya-belajar', function () {
    return Inertia::render('GayaBelajarView');
})->name('gaya-belajar');

Route::get('/kontak', function () {
    return Inertia::render('KontakView');
})->name('kontak');

Route::get('/login', function () {
    return Inertia::render('LoginView');
})->name('login');

// routes/web.php


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [SoalController::class, 'index'])->name('dashboard');
    Route::get('/soal/add', [SoalController::class, 'create'])->name('soal.create');
    Route::post('/soal', [SoalController::class, 'store'])->name('soal.store');
    Route::get('/soal/{soal}/edit', [SoalController::class, 'edit'])->name('soal.edit');
    Route::put('/soal/{soal}', [SoalController::class, 'update'])->name('soal.update');
    Route::delete('/soal/{id}', [SoalController::class, 'destroy'])->name('soal.destroy');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
