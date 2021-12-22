<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SongController;
use \App\Http\Controllers\Bandscontroller;
use \App\Http\Controllers\albumController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/songs', [SongController::class, 'index'])->Name('songs');
Route::get('/bands', [Bandscontroller::class, 'index'])->Name('bands');
Route::get('/albums', [albumController::class, 'index'])->Name('albums');


Route::get('songs/create', [SongController::class, 'createview'])->Name('create.show')->middleware('auth');
Route::get('bands/create', [Bandscontroller::class, 'createview'])->Name('band.show')->middleware('auth');
Route::get('albums/create', [albumController::class, 'create'])->Name('album.show')->middleware('auth');


Route::post('/songs/create', [SongController::class, 'create'])->Name('create')->middleware('auth');
Route::post('/bands/create', [Bandscontroller::class, 'create'])->Name('Bcreate')->middleware('auth');
Route::post('/albums/create', [albumController::class, 'create'])->Name('Bcreate')->middleware('auth');


Route::put('songs/edit/{id}', [SongController::class, 'update'])->Name('update')->middleware('auth');
Route::put('bands/edit/{id}', [Bandscontroller::class, 'update'])->Name('Bupdate')->middleware('auth');
Route::put('albums/edit/{id}', [albumController::class, 'update'])->Name('Aupdate')->middleware('auth');


Route::get('songs/edit/{id}', [SongController::class, 'edit'])->Name('edit')->middleware('auth');
Route::get('bands/edit/{id}', [Bandscontroller::class, 'edit'])->Name('Bedit')->middleware('auth');
Route::get('albums/edit/{id}', [albumController::class, 'edit'])->Name('Bedit')->middleware('auth');


Route::delete('songs/delete/{id}', [SongController::class, 'destroy'])->Name('destroy')->middleware('auth');
Route::delete('bands/delete/{id}', [Bandscontroller::class, 'destroy'])->Name('Bdestroy')->middleware('auth');
Route::delete('albums/delete/{id}', [albumController::class, 'destroy'])->Name('Bdestroy')->middleware('auth');


Route::get('/song/{id}', [SongController::class, 'show'])->Name('song');
Route::get('/band/{id}', [Bandscontroller::class, 'show'])->Name('band');
Route::get('/album/{id}', [albumController::class, 'show'])->Name('band');
