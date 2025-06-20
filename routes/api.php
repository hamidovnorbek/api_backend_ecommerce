<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('login', [AuthController::class, 'login']);
Route::get('user',  [AuthController::class, 'user'])->middleware('auth:sanctum');;
Route::post('logout', [AuthController::class, 'logout']);
Route::post('register', [AuthController::class, 'register']);



Route::resource('favorites', FavoriteController::class)->middleware('auth:sanctum');
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('categories.products', CategoryProductController::class);
Route::resource('orders', OrderController::class)->middleware('auth:sanctum');
