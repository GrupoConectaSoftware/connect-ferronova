<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==========================================================
// PÁGINA PRINCIPAL
// ==========================================================
Route::get('/', function () {
    return view('pages.index.ferronova');
})->name('home');

// ==========================================================
// AUTENTICACIÓN (SOLO VISTAS)
// ==========================================================
Route::get('/login', function () {
    return view('pages.form.sesion.login.form-login');
})->name('login');

Route::get('/register', function () {
    return view('pages.form.sesion.register.form-register');
})->name('register');