<?php

use App\Http\Controllers\EntradaController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// La vista producto saldrá aquí:
Route::get('/producto', function(){
    return view('almacen.producto');
});

Route::get('probar-conexion', function(){
    try {
        DB::connection()->getPdo();
        return "Conexión exitosa";
    } catch (\Throwable $e) {
        return "Error".$e->getMessage() ;
    }
});

Route::get('entrada', [EntradaController::class, 'index']);

// Si quisiéramos todas las rutas de un controlador, sería así:
Route::resource('entrada', EntradaController::class);

// Si quisieramos de ahí, quitar algúna ruta... sería x ejemplo:
// Route::resource('entrada', EntradaController::class)->except(['show', 'edit',]);


// La vista plantilla ----> app saldrá aquí:
Route::get('/app', function () {
    return view('usuario.index');
});