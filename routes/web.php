<?php

use Illuminate\Support\Facades\Route;


// Para el Home
Route::get('/', function () {
    return view('public.bienvenida'); // El punto le dice a Laravel: entra a la carpeta 'public'
});

// Para Detalles
Route::get('/detalles', function () {
    return view('public.detalles');
});
Route::get('/reservar', function () {
    return view('public.reservar'); // El punto indica que está dentro de la carpeta public
});

Route::get('/confirmacion', function () {
    return view('public.confirmacion');
});

Route::get('/admin-login', function () {
    return view('admin.login'); // El punto indica que está en la carpeta admin
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/gestion_negocio', function () {
    return view('admin.gestion_negocio');
});

Route::get('/admin/reservaciones', function () {
    return view('admin.reservaciones');
});

Route::get('/admin/perfil', function () {
    return view('admin.perfil');
});

Route::get('/admin/reportes', function () {
    return view('admin.reportes');
});

// Rutas de Cliente
Route::get('/login', function () {
    return view('public.login');
});

// Rutas de Superadmin
Route::get('/superadmin/login', function () {
    return view('superadmin.login');
});

Route::get('/superadmin/dashboard', function () {
    return view('superadmin.dashboard');
});

Route::get('/superadmin/ajustes', function () {
    return view('superadmin.ajustes');
});

Route::post('/superadmin/guardar-ajustes', function () {
    return redirect('/superadmin/ajustes')->with('success', 'Ajustes guardados correctamente (Simulación).');
});

Route::get('/superadmin/suscripciones', function () {
    return view('superadmin.suscripciones');
});