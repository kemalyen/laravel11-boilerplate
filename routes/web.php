<?php

use App\Livewire\ListProducts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', ListProducts::class);