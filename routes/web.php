<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\ListProducts;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



Route::get('/products', ListProducts::class);

require __DIR__.'/auth.php';
