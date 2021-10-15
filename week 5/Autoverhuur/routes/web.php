<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CarController;

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



Route::get('/', [CarController::class, 'index']);
Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/create', [CarController::class, 'createview']);
Route::post('/cars/create', [CarController::class, 'create']);
Route::get('cars/edit/{id}', [CarController::class, 'edit']);
Route::get('/cars/{id}', [CarController::class, 'show']);
