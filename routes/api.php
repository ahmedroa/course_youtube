<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::apiResource('tasks', TaskController::class);

// Route::post('add', [TaskController::class, 'store']);

// Route::get('tasks', [TaskController::class, 'index']);

// Route::put('tasks/{id}', [TaskController::class, 'update']);

// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);

// Route::get('tasks/{id}', [TaskController::class, 'show']);

Route::apiResource('tasks', TaskController::class);
Route::apiResource('profiles', ProfileController::class);