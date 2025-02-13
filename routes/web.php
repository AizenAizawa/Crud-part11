<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/Siswa', function () {
    return view('Siswa/siswa');
});

Route::resource('siswa', SiswaController::class);

route::get("/", [SiswaController::class, 'index'])->name('index.index');

Route::get('/crud', function () {
    return view('Halaman Crud');
});
