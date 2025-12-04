<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');
// })->middleware('auth')->name('dashboard');
