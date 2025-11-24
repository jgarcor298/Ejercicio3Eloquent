<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Relacion1NController;
use App\Http\Controllers\PintorController;
use App\Http\Controllers\PinturaController;


Route::get('/', function () {
    return "Ejemplo de eloquent de una relacion uno a varios";
});

//  PintorController

Route::get('/agregar-pintores', [PintorController::class, 'store'])
->name('guardar');

Route::get('/mostrar-pintores', [PintorController::class, 'index'])
->name('indexar');

Route::get('/mostrar-pintor-{id}', [PintorController::class, 'show'])
->name('enseñar');

Route::get('/modificar-pintor', [PintorController::class, 'update'])
->name('actualizar');

Route::get('/borrar-primer-pintor', [PintorController::class, 'remove'])
->name('eliminar');

// Pintura Controller
Route::get('/agregar-pinturas', [PinturaController::class, 'add'])
->name('añadir');

Route::get('/mostrar-pinturas', [PinturaController::class, 'present'])
->name('presentar');

Route::get('/galeria', [PinturaController::class, 'galeria']);


// Relacion1N Controller
Route::get('/pinturas-velazquez', [Relacion1NController::class, 'read'])
    ->name('leer');

Route::get('/pintor-meninas', [Relacion1NController::class, 'display'])
    ->name('exponer');