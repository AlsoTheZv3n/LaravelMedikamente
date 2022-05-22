<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\PharmasController;

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
Route::get('/view/{id}' , [DrugsController::class, 'view'])->middleware('editauth');
Route::get('/view/{id}' , [DrugsController::class, 'view'])->middleware('createauth');

Route::get('/pharma', function() {
    return view('pharma');
});

Route::get('/pharma' , [PharmasController::class, 'index']);
