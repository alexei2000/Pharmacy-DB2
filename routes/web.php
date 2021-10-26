<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PharmacyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect()->route('dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', DashboardController::class)->name('dashboard');

Route::resource('employees', EmployeeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas para medicinas

Route::resource('medicinas', MedicineController::class);

// Route::get('/medicinas', 'App\Http\Controllers\MedicinesController@index');

// Route::get('/medicinas/nueva', 'App\Http\Controllers\MedicinesController@create')->name('medicines.create');

// Route::get('/medicinas/{id}', 'App\Http\Controllers\MedicinesController@show')->name('medicines.show');

// Route::delete('/medicinas/{id}', 'App\Http\Controllers\MedicinesController@destroy')->name('medicines.destroy');

// Route::post('/medicinas', 'App\Http\Controllers\MedicinesController@store');


//Rutas para Laboratorios

Route::resource('laboratorios', LaboratoryController::class);


Route::resource('pharmacies', PharmacyController::class);


// Route::get('/laboratorios', 'App\Http\Controllers\LaboratoriesController@index');

// Route::get('/laboratorio/nuevo', 'App\Http\Controllers\LaboratoriesController@create')->name('laboratories.create');

// Route::get('/laboratorios/{id}', 'App\Http\Controllers\LaboratoriesController@show')->name('laboratories.show');

// Route::delete('/laboratorios/{id}', 'App\Http\Controllers\LaboratoriesController@destroy')->name('laboratories.destroy');

// Route::post('/laboratorios', 'App\Http\Controllers\LaboratoriesController@store');
