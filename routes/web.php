<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index']);


Route::get('/laravel', function () {
    return view('welcome');
});
