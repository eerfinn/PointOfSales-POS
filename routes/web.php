<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Halaman Products
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

// Halaman User
Route::get('/user/{id?}/name/{name?}', [UserController::class, 'show']);

// Halaman Penjualan (Point of Sales)
Route::get('/sales', [SalesController::class, 'index']);