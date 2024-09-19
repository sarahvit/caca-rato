<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showRegisterForm'])->name('register');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('/dashboard', [AuthController::class, 'showDashboard'])->middleware('auth')->name('dashboard');


Route::post('/', [AuthController::class, 'store'])->name('users.store');
