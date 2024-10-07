<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

// Ruta para ver todos los registros
Route::get('/registros', [RegistroController::class, 'index'])->name('registros.index');

// Ruta para mostrar el formulario de registro
Route::get('/formulario', [RegistroController::class, 'create'])->name('formulario.create');

// Ruta para guardar el registro
Route::post('/registros', [RegistroController::class, 'store'])->name('registros.store');

// Ruta para mostrar el formulario de edición
Route::get('/registros/{id}/edit', [RegistroController::class, 'edit'])->name('registros.edit');

// Ruta para actualizar un registro
Route::put('/registros/{id}', [RegistroController::class, 'update'])->name('registros.update');

// Ruta para eliminar un registro
Route::delete('/registros/{id}', [RegistroController::class, 'destroy'])->name('registros.destroy');
