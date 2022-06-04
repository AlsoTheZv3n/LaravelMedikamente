<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\PharmasController;
use App\Http\Controllers\AdminsController;

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

Route::get('/', function() {
    return view('drug');
});

Route::get('/' , [DrugsController::class, 'index']);

Route::get('/view/{id}' , [DrugsController::class, 'view'])->middleware('auth', 'readauth');

Route::get('/edit/{id}' , [DrugsController::class, 'edit'])->middleware('auth', 'editauth');
Route::put('/edit/{id}' , [DrugsController::class, 'update'])->middleware('auth', 'editauth');

Route::get('/pharma', function() {
    return view('pharma');
});

Route::get('/pharma' , [PharmasController::class, 'index']);

Route::get('/pharma/edit/{pharmaId}', [PharmasController::class, 'edit']);
Route::put('/pharma/edit/{pharmaId}', [PharmasController::class, 'update']);


Route::get('/pharma/delete/{pharmaId}' , [PharmasController::class, 'destroy']);


Route::get('/admin' , [AdminsController::class, 'index']);
Route::get('/admins/{admin}' , [AdminsController::class, 'index']);
Route::get('/admins/{admin}/edit' , [AdminsController::class, 'edit']);
Route::get('/admins/{admin}/destroy' , [AdminsController::class, 'destroy']);

Route::get('/users/{id}', [UsersController::class, 'show']);

Route::get('/drugEdit/{id}' , [DrugsController::class, 'index']);

Route::create('/drug' , [DrugsController::class, 'create']);


