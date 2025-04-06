<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Coordinador\CoordinadorController;
use App\Http\Controllers\Profesor\ProfesorController;
use App\Http\Controllers\Padres\PadresController;


Route::get('/admin', [HomeController::class, 'index'])->name('admin.index'); 
Route::get('/coordinador', [CoordinadorController::class, 'index'])->name('coordinador.index');
Route::get('/profesor', [ProfesorController::class, 'index'])->name('profesor.index');
Route::get('/padres', [PadresController::class, 'index'])->name('padres.index');


