<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showRegisterForm'])->name('register');

Route::get('/dashboard', [AuthController::class, 'showDashboard'])->name('dashboard');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');


//rota para processar os dodos do formulário
Route::post('/users', [AuthController::class, 'store'])->name('users.store');
//Route::post('/login', [AuthController::class, 'login'])->name('login.submit');  

