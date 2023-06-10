<?php

use App\Http\Controllers\ClientController;
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

Route::get('/',  [ClientController::class, 'index'])->name('clients.index');
Route::get('clientes/create',  [ClientController::class, 'create'])->name('clients.create');
Route::put('clientes/{id}',  [ClientController::class, 'update'])->name('clients.update');
Route::delete('clientes/{id}/delete',  [ClientController::class, 'destroy'])->name('clients.delete');
Route::post('clientes/create',  [ClientController::class, 'store'])->name('clients.store');
Route::get('clientes/{id}/edit',  [ClientController::class, 'edit'])->name('clients.edit');
