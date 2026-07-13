<?php

use Illuminate\Support\Facades\Route;

// ==========================================================
// PÁGINA PRINCIPAL
// ==========================================================
Route::get('/', function () {
    return view('pages.index.homepages.ferronova');
})->name('home');

// ==========================================================
// MÓDULO UNITED (POR UNIDAD)
// ==========================================================
Route::get('/por-unidad', function () {
    return view('pages.index.united.ferronova-united');
})->name('united');

// ==========================================================
// AUTENTICACIÓN (SOLO VISTAS)
// ==========================================================
Route::get('/login', function () {
    return view('pages.form.sesion.login.form-login');
})->name('login');

Route::get('/register', function () {
    return view('pages.form.sesion.register.form-register');
})->name('register');

// ==========================================================
// (Futuras rutas para cuando avancemos)
// ==========================================================
// Route::view('/catalogo', 'pages.catalog.ferronova-catalog')->name('catalog');
// Route::view('/proyectos', 'pages.projects.ferronova-projects')->name('projects');
// Route::view('/nosotros', 'pages.about.ferronova-about')->name('about');