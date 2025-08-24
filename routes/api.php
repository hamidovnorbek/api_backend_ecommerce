<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ProductReviewController as ProductReviewControllerAlias;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StatusOrderController;
use App\Http\Controllers\UserAddressController;
use App\Models\UserPaymentCards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('login', [AuthController::class, 'login']);
Route::get('user',  [AuthController::class, 'user'])->middleware('auth:sanctum');;
Route::post('logout', [AuthController::class, 'logout']);
Route::post('register', [AuthController::class, 'register']);




Route::resource('categories', CategoryController::class);
Route::resource('categories.products', CategoryProductController::class);


Route::resource('favorites', FavoriteController::class)->middleware('auth:sanctum');
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class)->middleware('auth:sanctum');

Route::resource('delivery-methods', DeliveryMethodController::class)->middleware('auth:sanctum');
Route::resource('payment-types', PaymentTypeController::class)->middleware('auth:sanctum');
Route::resource('user-addresses', UserAddressController::class)->middleware('auth:sanctum');
Route::resource('user-payment-cards', UserPaymentCards::class)->middleware('auth:sanctum');


Route::resource('statuses', StatusController::class)->middleware('auth:sanctum');
Route::resource('statuses.orders', StatusOrderController::class)->middleware('auth:sanctum');


Route::resource('reviews', ReviewController::class)->middleware('auth:sanctum');
Route::resource('products.reviews', ProductReviewController::class)->middleware('auth:sanctum');
