<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\ListProducts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

Route::view('/', 'welcome');

Route::get('debug', function(){

    Log::info('Your message is info');  
    Log::error("This is an test ERROR log event");

    $r = DB::table('users11')->select('usernamess')->get();

    return $r;  
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



Route::get('/products', ListProducts::class);

require __DIR__.'/auth.php';
