<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\PharmasController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\DrugsCreateController;


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

// Drug 
Route::get('/', function() {
    return view('drug');
});

Route::get('/' , [DrugsController::class, 'index']);

Route::get('/view/{id}' , [DrugsController::class, 'view'])->middleware('auth', 'readauth');

Route::get('/edit/{id}' , [DrugsController::class, 'edit'])->middleware('auth', 'editauth');
Route::put('/edit/{id}' , [DrugsController::class, 'update'])->middleware('auth', 'editauth');

Route::get('/drugEdit/{id}' , [DrugsController::class, 'index']);

Route::get('/drug' , [DrugsController::class, 'create']);

Route::get('/drug/create', function() {
    return view('drugCreate');
});

Route::post('/drug/create' , [DrugsCreateController::class, 'create']);

// Pharma 
Route::get('/pharma', function() {
    return view('pharma');
});

Route::get('/pharma' , [PharmasController::class, 'index']);

Route::get('/pharma/edit/{pharmaId}', [PharmasController::class, 'edit']);
Route::put('/pharma/edit/{pharmaId}', [PharmasController::class, 'update']);


Route::get('/pharma/delete/{pharmaId}' , [PharmasController::class, 'destroy']);

// Admin
Route::get('/admin' , [AdminsController::class, 'index']);
Route::get('/admins/{admin}' , [AdminsController::class, 'index']);
Route::get('/admins/{admin}/edit' , [AdminsController::class, 'edit']);
Route::get('/admins/{admin}/destroy' , [AdminsController::class, 'destroy']);

// User
Route::get('/users/{id}', [UsersController::class, 'show']);


