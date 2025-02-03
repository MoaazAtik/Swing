<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/**
 * Get the current authenticated user.
 */
Route::middleware('auth:sanctum')->get('/user', [AuthController::class, 'user']);

/**
 * Register a new user.
 */
Route::post('/register', [AuthController::class, 'register']);

/**
 * Log in a user with the provided credentials.
 */
Route::post('/login', [AuthController::class, 'login']);
