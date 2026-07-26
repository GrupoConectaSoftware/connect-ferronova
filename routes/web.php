<?php

use Illuminate\Support\Facades\Route;

// ==========================================================
// GRUPO: PÁGINAS PÚBLICAS (URL: /index/...)
// ==========================================================
Route::prefix('index')->group(function () {

    Route::redirect('/home', '/index');
    Route::redirect('/contact', '/index/contacto');

    // PÁGINA PRINCIPAL
    Route::get('/', function () {
        return view('pages.index.sections.homepages.ferronova');
    })->name('home');

    // CARRITO DE COMPRAS
    Route::get('/carrito', function () {
        return view('modules.shopping.ferronova-shopping');
    })->name('cart');

    // FAVORITOS (HEART)
    Route::get('/favoritos', function () {
        return view('modules.heart.ferronova-heart');
    })->name('heart');

    // MÓDULO UNITED (POR UNIDAD)
    Route::get('/por-unidad', function () {
        return view('pages.index.sections.united.ferronova-united');
    })->name('united');

    // CATÁLOGO
    Route::get('/catalogo', function () {
        return view('pages.index.sections.category.ferronova-category');
    })->name('category');

    // PROYECTOS
    Route::get('/proyectos', function () {
        return view('pages.index.sections.projects.ferronova-projects');
    })->name('projects');

    // SOBRE NOSOTROS
    Route::get('/sobre-nosotros', function () {
        return view('pages.index.sections.about.ferronova-about');
    })->name('about');

    // BLOG
    Route::get('/blog', function () {
        return view('pages.index.sections.blog.ferronova-blog');
    })->name('blog');

    // CONTACTO
    Route::get('/contacto', function () {
        return view('pages.index.sections.contact.ferronova-contact');
    })->name('contact');
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
