<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Coordinador\CoordinadorController;
use App\Http\Controllers\Profesor\ProfesorController;
use App\Http\Controllers\Padres\PadresController;


Route::get('/admin', [HomeController::class, 'index'])->name('admin.index'); 
Route::get('/coordinador', [CoordinadorController::class, 'index'])->name('coordinador.index');
Route::get('/profesor', [ProfesorController::class, 'index'])->name('profesor.index');
Route::delete('/profesor/destroy/{id}', [ProfesorController::class, 'destroy'])->name('profesor.destroy');
Route::get('/profesor/edit/{id}', [ProfesorController::class, 'edit'])->name('profesor.edit');
Route::put('/profesor/update/{id}', [ProfesorController::class, 'update'])->name('profesor.update');
Route::get('/padres', [PadresController::class, 'index'])->name('padres.index');
Route::get('/padres/mensajes', function () {
    return view('padres.mensajes');
})->name('padres.mensajes');

Route::get('/padres/chat/{id}', function ($id) {
    return view('padres.chat', ['id' => $id]);
})->name('padres.chat');


