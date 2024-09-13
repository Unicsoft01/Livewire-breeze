<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HtmlMinifier;

Route::middleware([HtmlMinifier::class])->group(function () {

    Route::view('/', 'welcome')->name('welcome');

    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');

    require __DIR__ . '/auth.php';
});