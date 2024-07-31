<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
/*
 *  Route::get('/productos', [ProductoController::class, 'index'])->name('producto.index');
    Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
    Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('producto.update'); 
 * 
 *  */



/*Route::get('/', function () {
    return view('welcome');
}); */
Route::resource('productos', ProductoController::class);



