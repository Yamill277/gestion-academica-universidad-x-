<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\EscuelaProfesionalController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cursos', CursoController::class);
Route::resource('escuelas-profesionales', EscuelaProfesionalController::class);
Route::resource('usuarios', UsuarioController::class);
