<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Redirect the root URL to the login page
Route::redirect('/', '/login');

// Display the login form
Route::get('login', function () {
    return view('auth.login');
})->name('login');

// Handle the login request
Route::post('login', [LoginController::class, 'login']);

// Display the registration form
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Handle the registration request
Route::post('/register', [RegisterController::class, 'register']);

// Protect your dashboard and index routes with auth middleware
Route::middleware('auth')->group(function () {
    // Dashboard route
    Route::get('/dashboard', function() {
        return view('admins.dashboard');
    })->name('dashboard');

    // Index route
    Route::get('/index', function() {
        return view('users.index');
    })->name('index');
});
