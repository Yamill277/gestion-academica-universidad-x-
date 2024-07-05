<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Ruta raíz que apunta a la vista 'index'
Route::get('/', function () {
    return view('index');
})->name('index');

// Ruta del dashboard, requiere autenticación y verificación de correo
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rutas del perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas de autenticación (login, register, reset password, etc.)
require __DIR__.'/auth.php';
