<?php

use App\Livewire\Auth\Login;
use App\Livewire\Roles\Roles;
use App\Livewire\Users\Users;
use App\Livewire\Auth\Register;
use App\Livewire\Roles\ViewRole;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\WebsiteManagement\WebsiteManagement;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');

});

Route::middleware('auth')->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('users', Users::class)->name('users');
    Route::get('roles', Roles::class)->name('roles');
    Route::get('roles/{role}', ViewRole::class)->name('roles.view');
    Route::get('website-management', WebsiteManagement::class)->name('website-management');
});
