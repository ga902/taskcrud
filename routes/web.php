<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\TaskController;

Route::get('/tasks/create', [TaskController::class, 'showCreateForm'])->name('task.create.form');
Route::get('/tasks', [TaskController::class, 'showTaskList'])->name('task.list');
Route::get('/tasks/{id}', [TaskController::class, 'showTask'])->name('task.show');
Route::get('/tasks/{id}/edit', [TaskController::class, 'editTask'])->name('task.edit');
Route::put('/tasks/{id}', [TaskController::class, 'updateTask'])->name('task.update');
Route::delete('/tasks/{id}', [TaskController::class, 'deleteTask'])->name('task.delete');
Route::post('/tasks', [TaskController::class, 'createTask'])->name('task.create');;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup',[UserController::class, 'signup']);
Route::post('/postLogin',[UserController::class,'postSignup']);
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'postlogin']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
