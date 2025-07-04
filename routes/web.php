<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TankController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/tanks/{tank}', [TankController::class, 'show'])->name('tanks.show');
