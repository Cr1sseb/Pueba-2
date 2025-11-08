<?php

use Illuminate\Support\Facades\Route;
// CORREGIDO: "app" debe ser "App" (Mayúscula)
use App\Http\Controllers\CategoriaController; 

Route::get('/', function () {
    return view('welcome');
});

// CORREGIDO: Se quitan las comillas de 'CategoriaController'
Route::resource('almacen/categoria', CategoriaController::class);