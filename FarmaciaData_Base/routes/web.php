<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/farmacia', function () {
    return view('Farmacias.Register');
});
Route::get('/empleado', function () {
    return view('Empleados.Register');
});
Route::get('/laboratorios', function () {
    return view('Laboratorios.Register');
});
Route::get('/medicamentos', function () {
    return view('Medicamentos.Register');
});
Route::get('/pedidos', function () {
    return view('Pedido.Register');
});
