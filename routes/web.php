<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/tipoProductos', function () {
    return view('tipoProducto.tiposProductos');
})->name('tipoProductos');

Route::middleware(['auth:sanctum', 'verified'])->get('/productos', function(){
    return view('producto.productos');
})->name('productos');

Route::middleware(['auth:sanctum', 'verified'])->get('/promociones', function(){
    return view('promocion.promociones');
})->name('promociones');
