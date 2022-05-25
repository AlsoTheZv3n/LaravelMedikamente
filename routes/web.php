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

Route::get('/view/{id}' , [DrugsController::class, 'view'])->middleware('readauth');

Route::get('/view/{id}' , [DrugsController::class, 'edit'])->middleware('editauth');
Route::get('/view/{id}' , [DrugsController::class, 'create'])->middleware('createauth');

Route::get('/pharma', function() {
    return view('pharma');
});

Route::get('/pharma' , [PharmasController::class, 'index']);
Route::get('/pharma/{pharma}/edit' , [PharmaController::class, 'edit']);
Route::get('/pharma/{pharma}/destroy' , [PharmaController::class, 'destroy']);


Route::get('/admin', function() {
    return view('admin');
});

Route::get('/admin' , [AdminsController::class, 'index']);
Route::get('/admins/{admin}' , [AdminsController::class, 'index']);
Route::get('/admins/{admin}/edit' , [AdminsController::class, 'edit']);
Route::get('/admins/{admin}/destroy' , [AdminsController::class, 'destroy']);

Route::get('/users/{id}', [UsersController::class, 'show']);
