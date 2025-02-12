<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/crud', function () {
    return view('Halaman Crud');
});
