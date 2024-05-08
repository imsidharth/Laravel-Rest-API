<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('create',[App\Http\Controllers\ApiController::class,'createProduct']);
Route::get('products',[App\Http\Controllers\ApiController::class,'getProducts']);
Route::get('products/{id}/details',[App\Http\Controllers\ApiController::class,'getProductDetails']);
Route::post('products/{id}/update',[App\Http\Controllers\ApiController::class,'updateProductDetails']);
Route::get('products/{id}/delete',[App\Http\Controllers\ApiController::class,'deleteProductDetails']);
Route::middleware('auth:sanctum')->group(function(){ Route::get('products',[App\Http\Controllers\ApiController::class,'getProducts']);
});
