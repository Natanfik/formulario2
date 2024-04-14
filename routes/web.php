<?php
use App\Models\Clientes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteControladora;
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
    return view('inicio');
});

// routes/web.php

Route::get('/clientes', [ClienteControladora::class, 'index'])->name('cliente.index');
Route::get('/clientes/create', [ClienteControladora::class, 'create'])->name('cliente.create');
Route::post('/clientes', [ClienteControladora::class, 'store'])->name('cliente.store');
Route::get('/clientes/{cliente}', [ClienteControladora::class, 'show'])->name('cliente.show');
Route::get('/clientes/{cliente}/edit', [ClienteControladora::class, 'edit'])->name('cliente.edit');
Route::put('/clientes/{cliente}', [ClienteControladora::class, 'update'])->name('cliente.update');
Route::delete('/clientes/{cliente}', [ClienteControladora::class, 'destroy'])->name('cliente.destroy');
;
