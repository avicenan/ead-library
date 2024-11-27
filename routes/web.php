<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('dashboard'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');

Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');

Route::get('/buku/{buku}', [BukuController::class, 'show'])->name('buku.show');

Route::get('/buku/{buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');

Route::put('/buku/{buku}', [BukuController::class, 'update'])->name('buku.update');

Route::delete('/buku/{buku}', [BukuController::class, 'destroy'])->name('buku.destroy');
