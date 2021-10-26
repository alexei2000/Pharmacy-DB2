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
})->middleware('auth');

Auth::routes();

Route::middleware('auth')->group(
    function () {
        Route::get('/dashboard', DashboardController::class)->name('dashboard');

        Route::resources([
            'medicinas' => MedicineController::class,
            'laboratorios' => LaboratoryController::class,
            'pharmacies' => PharmacyController::class,
            'employees' => EmployeeController::class
        ]);
    }
);
