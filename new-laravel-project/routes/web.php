<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/tasks/create', [TaskController::class, 'createForm'])->name('tasks.create.form');
Route::post('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/{task}/edit', [TaskController::class, 'editForm'])->name('tasks.edit');
Route::post('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit.submit');
Route::get('/tasks/{task}/delete', [TaskController::class, 'delete'])->name('tasks.delete');
Route::post('/tasks/update-priority', [TaskController::class, 'updatePriority'])->name('tasks.update-priority');

