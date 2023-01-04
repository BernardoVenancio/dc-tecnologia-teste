<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ProductController;

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

Route::get('/produtos', [ProductController::class,'show'])->name('produtos.show');
Route::get('/produtos/criar', [ProductController::class,'create']);
Route::get('/produtos/{produto}/edit', [ProductController::class,'edit'])->name('produtos.edit');

Route::post('/produtos/adicionar', [ProductController::class,'store']);
Route::put('/produtos/update/{produto}', [ProductController::class,'update'])->name('produtos.update');
Route::delete('/produtos/delete/{produto}', [ProductController::class,'destroy'])->name('produtos.destroy');

Route::get('/vendas/criar', [VendaController::class,'create']);



