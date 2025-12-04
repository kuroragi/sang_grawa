<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
})->name('dashboard');
// })->middleware('auth')->name('dashboard');

// Schools routes
Route::get('/schools', function () {
    return view('pages.schools.index');
})->name('schools.index');
