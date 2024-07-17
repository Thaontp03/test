<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookController::class,'index'])->name('book.index');
Route::get('/create', [BookController::class,'create'])->name('book.create');
Route::post('/create', [BookController::class,'store'])->name('book.store');
Route::get('/edit/{id}', [BookController::class,'edit'])->name('book.edit');
Route::put('/edit/{id}', [BookController::class,'update'])->name('book.update');
Route::delete('/delete/{id}', [BookController::class,'destroy'])->name('book.destroy');