<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', showRegisterForm(){
    return view('register');
    
});

Route::get('/login', showLoginForm() {
    
    return view('login');
});

Route::get('/dashboard', showDashboard() {
    return view('dashboard');
});
