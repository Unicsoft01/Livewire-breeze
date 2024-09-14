<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HtmlMinifier;
use App\Livewire\Tasks\Index;

Route::middleware([HtmlMinifier::class])->group(function () {

    Route::view('/', 'welcome')->name('welcome');

    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');


    Route::get('/tasks/index', Index::class)->name('tasks.index');

    require __DIR__ . '/auth.php';
});
