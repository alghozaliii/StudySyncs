<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/kontak', function (): Response {
    return Inertia::render('KontakView');
})->name('kontak');

Route::get('/login', function () {
    return Inertia::render('Login');
})->name('login');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
