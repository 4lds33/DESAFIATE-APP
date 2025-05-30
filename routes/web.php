<?php

use App\Http\Controllers\VacanteController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/dashboard', [VacanteController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('vacantes.index');

Route::get('/vacantes/create', [VacanteController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('vacantes.create');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
