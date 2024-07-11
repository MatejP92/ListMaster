<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('todo-list', 'livewire.todo-list')
    ->middleware(['auth', 'verified'])
    ->name('todo-list');

Route::view('shopping-list', 'livewire.shopping-list')
    ->middleware(['auth', 'verified'])
    ->name('shopping-list');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
