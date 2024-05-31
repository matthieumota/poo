<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/hello/{name}', [HelloController::class, 'index']);

// Créer une page /inscription avec un AuthController
// On aura une méthode register avec une vue register

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);
Route::get('/logout', [AuthController::class, 'logout']);
