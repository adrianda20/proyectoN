<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

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

route::get('producto/create',[ProductoController::class, 'create'])->name('producto.create');
route::post('producto/store',[ProductoController::class, 'store'])->name('producto.store');
route::get('producto',[ProductoController::class, 'index'])->name('producto.index');
route::get('producto/edit/{id}',[ProductoController::class, 'edit'])->name('producto.edit');
route::post('producto/update/{id}',[ProductoController::class, 'update'])->name('producto.update');
route::delete('producto/delete/{id}',[ProductoController::class, 'delete'])->name('producto.delete');
