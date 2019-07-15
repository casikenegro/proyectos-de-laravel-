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
// Rutas
//Rutas  Doctores

Route::resource('/Doctor','DoctorController'); //me permite acceder a todas las rutas del controlador DoctorController
Route::post('/Doctor','DoctorController@store'); // Es un metodo post Que me envia los Datos de la vista al servidor y del servidor a la base de datos
Route::get('/Doctor/{Doctor}/edit','DoctorController@edit')->name('Doctor.edit'); //metodo para pedir un Doctor en especifico


//Rustas Usuarios
 Route::resource('/User','UsersController');
 Route::post('/User','UsersController@store');
 Route::get('/User/{User}/edit','UsersController@edit')->name('User.edit');
 //Rutas Employe
 Route::resource('/Employe','Employecontroller');
 Route::post('/Employe','Employecontroller@store');
 Route::get('/Employe/{Employe}/edit','Employecontroller@edit')->name('Employe.edit');
 // citas
 Route::resource('/appointment','appointmentcontroller');
 Route::post('/appointment','appointmentcontroller@store');
 Route::get('/appointment/{appointment}/edit','appointmentcontroller@edit')->name('appointment.edit');
