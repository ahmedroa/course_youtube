<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::apiResource('tasks', TaskController::class);

// Route::post('add', [TaskController::class, 'store']);

// Route::get('tasks', [TaskController::class, 'index']);

// Route::put('tasks/{id}', [TaskController::class, 'update']);

// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);

// Route::get('tasks/{id}', [TaskController::class, 'show']);

// Authentication Routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Protected Routes
// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('logout', [AuthController::class, 'logout']);
//     Route::get('me', [AuthController::class, 'me']);
    
//     Route::apiResource('tasks', TaskController::class);
//     Route::apiResource('profiles', ProfileController::class)->only(['store', 'show']);
// });


Route::apiResource('tasks', TaskController::class);
Route::apiResource('profiles', ProfileController::class); 
Route::get('profiles/{id}', [ProfileController::class, 'show']);
Route::get('user/{id}/profile', [UserController::class, 'getProfile']);

// Route::apiResource('profile', ProfileController::class);
