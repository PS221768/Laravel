<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SongController;
use \App\Http\Controllers\Bandscontroller;
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

Route::get('/', [SongController::class, 'index'])->Name('index');

Route::get('/songs/songs', [SongController::class, 'index'])->Name('songs');
Route::get('/bands/bands', [Bandscontroller::class, 'index'])->Name('bands');


Route::get('songs/songs/create', [SongController::class, 'createview'])->Name('create.show');
Route::get('bands/bands/create', [Bandscontroller::class, 'createview'])->Name('band.show');


Route::post('/songs/songs/create', [SongController::class, 'create'])->Name('create');
Route::post('/bands/bands/create', [Bandscontroller::class, 'create'])->Name('Bcreate');


Route::put('songs/songs/edit/{id}', [SongController::class, 'update'])->Name('update');
Route::put('bands/bands/edit/{id}', [Bandscontroller::class, 'update'])->Name('Bupdate');


Route::get('songs/songs/edit/{id}', [SongController::class, 'edit'])->Name('edit');
Route::get('bands/bands/edit/{id}', [Bandscontroller::class, 'edit'])->Name('Bedit');


Route::delete('songs/songs/delete/{id}', [SongController::class, 'destroy'])->Name('destroy');
Route::delete('bands/bands/delete/{id}', [Bandscontroller::class, 'destroy'])->Name('Bdestroy');


Route::get('/songs/songs/{id}', [SongController::class, 'show'])->Name('song');
Route::get('/bands/band/{id}', [Bandscontroller::class, 'show'])->Name('band');