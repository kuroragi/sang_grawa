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
Route::get('/schools', \App\Livewire\School\SchoolList::class)->name('schools.index');

// Master Data routes (placeholder)
Route::get('/companies', function () {
    return view('pages.placeholder');
})->name('companies.index');

Route::get('/vehicles', function () {
    return view('pages.placeholder');
})->name('vehicles.index');

Route::get('/routes', function () {
    return view('pages.placeholder');
})->name('routes.index');

Route::get('/drivers', function () {
    return view('pages.placeholder');
})->name('drivers.index');

// Student & Card routes (placeholder)
Route::get('/students', function () {
    return view('pages.placeholder');
})->name('students.index');

Route::get('/cards', function () {
    return view('pages.placeholder');
})->name('cards.index');

// Transaction routes (placeholder)
Route::get('/transactions', function () {
    return view('pages.placeholder');
})->name('transactions.index');

Route::get('/history', function () {
    return view('pages.placeholder');
})->name('history.index');

// Report routes (placeholder)
Route::get('/reports/daily', function () {
    return view('pages.placeholder');
})->name('reports.daily');

Route::get('/reports/weekly', function () {
    return view('pages.placeholder');
})->name('reports.weekly');

Route::get('/reports/monthly', function () {
    return view('pages.placeholder');
})->name('reports.monthly');

Route::get('/reports/payment', function () {
    return view('pages.placeholder');
})->name('reports.payment');

// Settings routes (placeholder)
Route::get('/schedules', function () {
    return view('pages.placeholder');
})->name('schedules.index');

Route::get('/users', function () {
    return view('pages.placeholder');
})->name('users.index');

Route::get('/settings', function () {
    return view('pages.placeholder');
})->name('settings.index');

// Additional CRUD routes for future development
Route::prefix('schools')->name('schools.')->group(function () {
    Route::get('/create', function () { return view('pages.placeholder'); })->name('create');
    Route::get('/{id}/edit', function () { return view('pages.placeholder'); })->name('edit');
    Route::get('/{id}', function () { return view('pages.placeholder'); })->name('show');
});

Route::prefix('companies')->name('companies.')->group(function () {
    Route::get('/create', function () { return view('pages.placeholder'); })->name('create');
    Route::get('/{id}/edit', function () { return view('pages.placeholder'); })->name('edit');
    Route::get('/{id}', function () { return view('pages.placeholder'); })->name('show');
});

Route::prefix('vehicles')->name('vehicles.')->group(function () {
    Route::get('/create', function () { return view('pages.placeholder'); })->name('create');
    Route::get('/{id}/edit', function () { return view('pages.placeholder'); })->name('edit');
    Route::get('/{id}', function () { return view('pages.placeholder'); })->name('show');
});

Route::prefix('drivers')->name('drivers.')->group(function () {
    Route::get('/create', function () { return view('pages.placeholder'); })->name('create');
    Route::get('/{id}/edit', function () { return view('pages.placeholder'); })->name('edit');
    Route::get('/{id}', function () { return view('pages.placeholder'); })->name('show');
});

Route::prefix('students')->name('students.')->group(function () {
    Route::get('/create', function () { return view('pages.placeholder'); })->name('create');
    Route::get('/{id}/edit', function () { return view('pages.placeholder'); })->name('edit');
    Route::get('/{id}', function () { return view('pages.placeholder'); })->name('show');
});

Route::prefix('cards')->name('cards.')->group(function () {
    Route::get('/create', function () { return view('pages.placeholder'); })->name('create');
    Route::get('/{id}/edit', function () { return view('pages.placeholder'); })->name('edit');
    Route::get('/{id}', function () { return view('pages.placeholder'); })->name('show');
});

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/create', function () { return view('pages.placeholder'); })->name('create');
    Route::get('/{id}/edit', function () { return view('pages.placeholder'); })->name('edit');
    Route::get('/{id}', function () { return view('pages.placeholder'); })->name('show');
});
