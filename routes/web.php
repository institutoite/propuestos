<?php

use App\Http\Controllers\RestaController;
use App\Http\Controllers\MultiplicacionController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\SumaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnteroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("generar/divisiones", [DivisionController::class,'mostrarVista'])->name("mostrar.division.vista");
Route::post('imprimir/divisiones', [DivisionController::class,'imprimir'])->name('divisiones.imprimir');

Route::get("generar/sumas", [SumaController::class,'mostrarVista'])->name("mostrar.suma.vista");
Route::post('imprimir/sumas', [SumaController::class,'imprimir'])->name('sumas.imprimir');

Route::get("generar/restas", [RestaController::class,'mostrarVista'])->name("mostrar.resta.vista");
Route::post('imprimir/restas', [RestaController::class,'imprimir'])->name('restas.imprimir');

Route::get("generar/multiplicaciones", [MultiplicacionController::class,'mostrarVista'])->name("mostrar.multiplicacions.vista");
Route::post('imprimir/multiplicaciones', [MultiplicacionController::class,'imprimir'])->name('multiplicacion.imprimir');

Route::get('ejercicios', [EnteroController::class, 'index'])->name('ejercicios.index');
Route::get('ejercicios', [EnteroController::class, 'index'])->name('ejercicios.index');
Route::post('ejercicios/generate', [EnteroController::class, 'generate'])->name('ejercicios.generate');
Route::post('ejercicios/generate-pdf', [EnteroController::class, 'generatePdf'])->name('ejercicios.generate.pdf');
Route::delete('ejercicios/{id}', [EnteroController::class, 'destroy'])->name('ejercicios.destroy');