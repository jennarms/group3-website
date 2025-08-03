<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\Auth\LoginController;

// Public Routes
Route::get('/', function () {
    return view('home');
})->name('home');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    
    Route::prefix('settings')->group(function () {
        Route::redirect('', 'settings/profile');
        Volt::route('profile', 'settings.profile')->name('settings.profile');
        Volt::route('password', 'settings.password')->name('settings.password');
        Volt::route('appearance', 'settings.appearance')->name('settings.appearance');
    });
});