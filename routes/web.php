<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

Route::get('/',[ProductsController::class, 'index'])->name('Listado');  
Route::post('/',[ProductsController::class,'store'])->name('Listado.guardar');
Route::delete('productos/{id}',[ProductsController::class,'destroy'])->name('productos.destroy');
