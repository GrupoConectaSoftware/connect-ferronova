<?php

use Illuminate\Support\Facades\Route;

// ==========================================================
// GRUPO: PÁGINAS PÚBLICAS (URL: /index/...)
// ==========================================================
Route::prefix('index')->group(function () {

    // PÁGINA PRINCIPAL
    Route::get('/', function () {
        return view('pages.index.sections.homepages.ferronova');
    })->name('home');

    // MÓDULO UNITED (POR UNIDAD)
    Route::get('/por-unidad', function () {
        return view('pages.index.sections.united.ferronova-united');
    })->name('united');

    // SOBRE NOSOTROS
    Route::get('/sobre-nosotros', function () {
        return view('pages.index.sections.about.ferronova-about');
    })->name('about');

    // CATÁLOGO
    Route::get('/catalogo', function () {
        return view('pages.index.sections.category.ferronova-category');
    })->name('category');

    // CONTACTO
    Route::get('/contacto', function () {
        return view('pages.index.sections.contact.ferronova-contact');
    })->name('contact');

    // PROYECTOS
    Route::get('/proyectos', function () {
        return view('pages.index.sections.projects.ferronova-projects');
    })->name('projects');

});

// ==========================================================
// AUTENTICACIÓN (LOGIN Y REGISTRO)
// ==========================================================
Route::get('/login', function () {
    return view('pages.form.sesion.login.form-login');
})->name('login');

Route::get('/register', function () {
    return view('pages.form.sesion.register.form-register');
})->name('register');