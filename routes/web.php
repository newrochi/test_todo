<?php

use App\Http\Controllers\TodosController;
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

Route::get('/', [TodosController::class,'index'])->name('todos.index');
Route::get('/show/{id}', [TodosController::class,'show'])->name('todos.show');

Route::get('/edit/{id}', [TodosController::class,'edit'])->name('todos.edit');
Route::put('/update/{id}', [TodosController::class,'update'])->name('todos.update');

Route::get('/create', [TodosController::class,'create'])->name('todos.create');
Route::post('/store', [TodosController::class,'store'])->name('todos.store');

Route::delete('/delete/{id}', [TodosController::class,'delete'])->name('todos.delete');

