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
// SOBRE NOSOTROS
// ==========================================================
Route::get('/sobre-nosotros', function () {
    return view('pages.index.about.ferronova-about');
})->name('about');

// ==========================================================
// CATÁLOGO
// ==========================================================
Route::get('/catalogo', function () {
    return view('pages.index.category.ferronova-category');
})->name('category');

// ==========================================================
// CONTACTO
// ==========================================================
Route::get('/contacto', function () {
    return view('pages.index.contact.ferronova-contact');
})->name('contact');

// ==========================================================
// AUTENTICACIÓN (SOLO VISTAS)
// ==========================================================
Route::get('/login', function () {
    return view('pages.form.sesion.login.form-login');
})->name('login');

Route::get('/register', function () {
    return view('pages.form.sesion.register.form-register');
})->name('register');