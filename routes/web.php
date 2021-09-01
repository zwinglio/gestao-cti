<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/tickets', [HomeController::class, 'tickets']);
Route::get('/tickets/create', [HomeController::class, 'createTicket']);

// Rotas de teste
Route::resource('departments', DepartmentController::class);




// Rotas de Departamentos
// Route::get(
//     '/departments/',
//     [DepartmentController::class,
//     'index']
// )->name('departments.index');

// Route::post(
//     '/departments',
//     [DepartmentController::class,
//     'store']
// )->name('departments.store');

// Route::get(
//     '/departments/create',
//     [DepartmentController::class,
//     'create']
// )->name('departments.create');

// Route::get(
//     '/departments/{id}/edit',
//     [DepartmentController::class,
//     'edit']
// )->name('departments.edit');

// Route::put(
//     '/departments/{id}',
//     [DepartmentController::class,
//     'update']
// )->name('departments.update');

// Route::get(
//     '/departments/{department}/destroy}',
//     [DepartmentController::class,
//     'destroy']
// )->name('departments.destroy');
