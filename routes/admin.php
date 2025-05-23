<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Coordinador\CoordinadorController;
use App\Http\Controllers\Profesor\ProfesorController;
use App\Http\Controllers\Padres\PadresController;
use App\Http\Controllers\Roles\RolesController;
use App\Http\Controllers\Permisos\PermisosController;
use App\Http\Controllers\Asignarrol\AsignarrolController;





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/admin', [HomeController::class, 'index'])->name('admin.index'); 
Route::get('/profesor', [ProfesorController::class, 'index'])->name('profesor.index');
Route::delete('/profesor/destroy/{id}', [ProfesorController::class, 'destroy'])->name('profesor.destroy');
Route::get('/profesor/edit/{id}', [ProfesorController::class, 'edit'])->name('profesor.edit');
Route::put('/profesor/update/{id}', [ProfesorController::class, 'update'])->name('profesor.update');
Route::get('/padres', [PadresController::class, 'index'])->name('padres.index');
Route::get('/padres/asistencia', [PadresController::class, 'vista_asistencia'])->name('padres.asistencia');
Route::get('/padres/calificaciones', [PadresController::class, 'vista_calificaciones'])->name('padres.calificaciones');
Route::post('/profesor/store', [ProfesorController::class, 'store'])->name('profesor.store');
Route::get('/padres/mensajes', function () {
    return view('padres.mensajes');
})->name('padres.mensajes');

Route::get('/padres/chat/{id}', function ($id) {
    return view('padres.chat', ['id' => $id]);
})->name('padres.chat');

Route::get('/roles', [RolesController::class, 'index'])->name('roles.index'); 
Route::delete('/roles/destroy/{id}', [RolesController::class, 'destroy'])->name('roles.destroy');
Route::get('/roles/edit/{id}', [RolesController::class, 'edit'])->name('roles.edit');
Route::get('/roles/permisos/{id}', [RolesController::class, 'edit'])->name('roles.edit');
Route::put('/roles/update/{id}', [RolesController::class, 'update'])->name('roles.update');
Route::post('/roles/store', [RolesController::class, 'store'])->name('roles.store');
Route::put('/roles/{role}', [RolesController::class, 'update'])->name('roles.update');

Route::get('/permisos', [PermisosController::class, 'index'])->name('permisos.index'); 
Route::delete('/permisos/destroy/{id}', [PermisosController::class, 'destroy'])->name('permisos.destroy');
Route::get('/permisos/edit/{id}', [PermisosController::class, 'edit'])->name('permisos.edit');
Route::put('/permisos/update/{id}', [PermisosController::class, 'update'])->name('permisos.update');
Route::post('/permisos/store', [PermisosController::class, 'store'])->name('permisos.store');
Route::get('/roles/{id}/permisos', [RolesController::class, 'edit'])->name('roles.rolespermisos');


Route::get('/asignar', [AsignarrolController::class, 'index'])->name('asignarrol.index');
Route::get('/asignar/{user}/edit', [AsignarrolController::class, 'edit'])->name('asignar.edit');
Route::delete('/asignar/{user}', [AsignarrolController::class, 'destroy'])->name('asignar.destroy');
Route::put('/asignar/{user}', [AsignarrolController::class, 'update'])->name('asignar.update');

Route::get('/coordinador', [CoordinadorController::class, 'index'])->name('coordinador.index');
Route::delete('/coordinador/destroy/{id}', [CoordinadorController::class, 'destroy'])->name('coordinador.destroy');
Route::get('/coordinador/edit/{id}', [CoordinadorController::class, 'edit'])->name('coordinador.edit');
//Route::put('/coordinador/update/{id}', [CoordinadorController::class, 'update'])->name('coordinador.update');
Route::put('/coordinador/update/{id}', [CoordinadorController::class, 'update'])->name('coordinador.update');

Route::post('/coordinador/store', [CoordinadorController::class, 'store'])->name('coordinador.store');

Route::get('/generarpdf', [CoordinadorController::class, 'generarpdf'])->name('coordinador.generarpdf');
Route::get('/exportarExcel', [CoordinadorController::class, 'exportarExcel'])->name('coordinador.exportarExcel');
Route::get('/exportarCSV', [CoordinadorController::class, 'exportarCSV'])->name('coordinador.exportarCSV');



