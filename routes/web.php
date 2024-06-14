<?php

use App\Http\Controllers\BerkasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;


// Display the welcome page
Route::get('/', function () {
    return view('welcome');
})->name('beranda');

// Display the pendaftaran page
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
})->name('pendaftaran');

// Display the login form
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Handle the login request
Route::post('/login', [LoginController::class, 'login']);

// Display the registration form
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Handle the registration request
Route::post('/register', [RegisterController::class, 'register']);

// Display the data siswa form (protected by auth middleware)
Route::get('/data-siswa', [UserController::class, 'showForm'])->middleware('auth')->name('data.siswa');

// Protect your dashboard and index routes with auth middleware
Route::middleware('auth')->group(function () {
    // Dashboard route
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Index route
    Route::get('/index', [UserController::class, 'index'])->name('index');

    // Logout route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Handle data siswa submission
    Route::post('/data-siswa-submit', [UserController::class, 'store'])->name('data.siswa.submit');

    Route::get('/admin/siswa', [AdminController::class, 'showSiswa'])->name('siswa.siswa');

    Route::post('/data-siswa-submit', [UserController::class, 'store'])->name('data.siswa.submit')->middleware('auth');
    Route::post('/data-siswa-submit', [UserController::class, 'store'])->name('data.siswa.submit');

    //Upload Berkas
    Route::get('/upload-berkas', [UploadController::class, 'index'])->name('upload.berkas');
    Route::post('/upload-berkas', [UploadController::class, 'submit'])->name('upload.submit');

// routes/web.php

Route::get('/berkas', [App\Http\Controllers\BerkasController::class, 'index'])->name('berkas.index');
Route::get('/berkas', [BerkasController::class, 'index'])->name('berkas.index');


});
