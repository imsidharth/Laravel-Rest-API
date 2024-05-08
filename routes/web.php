<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('products/create',[App\Http\Controllers\ProductController::class,'store']);
Route::get('products/create',[App\Http\Controllers\ProductController::class,'create']);
Route::get('products',[App\Http\Controllers\ProductController::class,'read']);
Route::get('products/{id}/edit',[App\Http\Controllers\ProductController::class,'edit']);
// Route::post('products/{id}/edit',[App\Http\Controllers\ProductController::class,'update']);
Route::get('products/{id}/delete',[App\Http\Controllers\ProductController::class,'delete']);
