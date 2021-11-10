<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\VoetballerController;

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



Route::get('/', [VoetballerController::class, 'index']);
Route::get('/voetballers', [VoetballerController::class, 'index']);
Route::get('/voetballers/create', [VoetballerController::class, 'create']);
Route::post('/voetballers/create', [VoetballerController::class, 'store']);
Route::get('voetballers/edit/{id}', [VoetballerController::class, 'edit']);
Route::put('voetballers/edit/{id}', [VoetballerController::class, 'update']);
Route::delete('voetballers/delete/{id}', [VoetballerController::class, 'destroy']);
Route::get('/voetballers/{id}', [VoetballerController::class, 'show']);
