<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SongController;
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
    return view('welcome');
});

Route::get('/songs', [SongController::class, 'index'])->Name('songs');
Route::get('songs/create', [SongController::class, 'createview'])->Name('create.show');
Route::post('/songs/create', [SongController::class, 'create'])->Name('create');
Route::put('songs/edit/{id}', [SongController::class, 'update'])->Name('update');
Route::get('songs/edit/{id}', [SongController::class, 'edit'])->Name('edit');
Route::delete('songs/delete/{id}', [SongController::class, 'destroy'])->Name('destroy');
Route::get('/songs/{id}', [SongController::class, 'show'])->Name('song');