<?php

use App\Livewire\HomePage;
use App\Livewire\UsersPage;
use Illuminate\Support\Facades\Route;
//Application Pages
Route::middleware(['auth'])->group(function () {
Route::get('/',HomePage::class)->name('home.view');
Route::get('/users',UsersPage::class)->name('users.view');
});

//Auth Pages
Route::middleware(['guest'])->group(function () {
Route::get('/register',App\Livewire\Auth\Register::class)->name('register');
Route::get('/login', App\Livewire\Auth\Login::class)->name('login');
});
