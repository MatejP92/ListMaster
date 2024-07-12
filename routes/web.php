<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/shopping-list', 301);

Route::view('todo-list', 'livewire.todo-list')
    ->middleware(['auth', 'verified'])
    ->name('todo-list');

Route::view('shopping-list', 'shopping-list.shopping-list-page')
    ->middleware(['auth', 'verified'])
    ->name('shopping-list');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
