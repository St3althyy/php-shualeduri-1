<?php

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

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index'])->name('movies');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies/save', [MovieController::class, 'save'])->name('movies.save');
Route::post('/movies/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::get('/movies/{movie}/read', [MovieController::class, 'read'])->name('movies.read');
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{movie}/update', [MovieController::class, 'update'])->name('movies.update');
Route::delete('/movies/{movie}/delete', [MovieController::class, 'delete'])->name('movies.delete');

Route::get('/genres', [GenreController::class, 'index'])->name('genres');
Route::get('/genres/create', [GenreController::class, 'create'])->name('genres.create');
Route::post('/genres/save', [GenreController::class, 'save'])->name('genres.save');
Route::post('/genres/edit', [GenreController::class, 'edit'])->name('genres.edit');
Route::get('/genres/{genre}/read', [GenreController::class, 'read'])->name('genres.read');
Route::get('/genres/{genre}/edit', [GenreController::class, 'edit'])->name('genres.edit');
Route::put('/genres/{genre}/update', [GenreController::class, 'update'])->name('genres.update');
Route::delete('/genres/{genre}/delete', [GenreController::class, 'delete'])->name('genres.delete');
