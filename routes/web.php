<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;


// Rute untuk tampilan beranda
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk beranda
Route::get('/home', function () {
    return view('home');
});

Route::get('/', [PageController::class, 'index']);

// Rute otentikasi
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute dilindungi dengan middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/index1', [YourController::class, 'index']);
    
    // Rute untuk layanan
    Route::resource('services', ServiceController::class);

    // Rute untuk produk
    Route::resource('products', ProductController::class);
    
    Route::middleware(['auth'])->group(function () {
        Route::get('users/create', [UserController::class, 'create'])->name('users.create'); // For displaying the form
        Route::post('users', [UserController::class, 'store'])->name('users.store'); // For handling form submission
        Route::get('users', [UserController::class, 'index'])->name('users.index'); // For displaying the user list
    });

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
});

});
