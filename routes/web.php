<?php

use App\Livewire\HomePage;
use App\Livewire\SidebarComp;
use App\Livewire\UsersPage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.app');
// });
Route::get('/',HomePage::class)->name('home.view');
Route::get('/users',UsersPage::class)->name('users.view');