<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

use App\Http\Controllers\BukuController;
Route::resource('buku', BukuController::class);

use App\Http\Controllers\PeminjamanController;
Route::resource('peminjaman', PeminjamanController::class);

use App\Http\Controllers\AnggotaController;
Route::resource('anggota', AnggotaController::class);

use App\Http\Controllers\PenulisController;
Route::resource('penulis', PenulisController::class);
Route::get('penulis/{id}/edit', [PenulisController::class, 'edit'])->name('penulis.edit');


use App\Http\Controllers\RakController;
Route::resource('rak', RakController::class);

use App\Http\Controllers\SanksiController;
Route::get('/sanksi', [SanksiController::class, 'index'])->name('sanksi.index');
Route::get('/sanksi/create', [SanksiController::class, 'create'])->name('sanksi.create');
Route::post('/sanksi', [SanksiController::class, 'store'])->name('sanksi.store');
Route::get('/sanksi/{sanksi}/edit', [SanksiController::class, 'edit'])->name('sanksi.edit');
Route::put('/sanksi/{sanksi}', [SanksiController::class, 'update'])->name('sanksi.update');
Route::delete('/sanksi/{sanksi}', [SanksiController::class, 'destroy'])->name('sanksi.destroy');