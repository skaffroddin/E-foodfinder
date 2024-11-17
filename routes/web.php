<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

// Landing Page Route (Home)
Route::get('/', function () {
    return view('home');
});

// Public Routes (Accessible without authentication)
Route::middleware('guest')->group(function () {
    // Register Routes
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register.create');
    Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');

    // Login Routes
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

// Authenticated Routes (Require authentication)
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Logout
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});
