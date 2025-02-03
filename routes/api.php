<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/**
 * Get the current authenticated user.
 * Limit requests from user to the userLimit (defined in AppServiceProvider).
 */
Route::middleware(['auth:sanctum', 'throttle:userLimit'])
    ->get('/user', [AuthController::class, 'user']);

/**
 * Register a new user.
 */
Route::post('/register', [AuthController::class, 'register']);

/**
 * Log in a user with the provided credentials.
 */
Route::post('/login', [AuthController::class, 'login']);
