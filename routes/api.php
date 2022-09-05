<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/insert-data', [App\Http\Controllers\UploadController::class, 'addData']);
Route::post('/insert-ticket', [App\Http\Controllers\UploadController::class, 'ticket']);
Route::post('/update-user', [App\Http\Controllers\CategoryController::class, 'updateUser']);
Route::post('/insert-category', [App\Http\Controllers\CategoryController::class, 'store']);
Route::get('/delete-category/{id?}', [App\Http\Controllers\CategoryController::class, 'destroy']);
Route::post('/insert-supplier', [App\Http\Controllers\SupplierController::class, 'store']);
Route::get('/delete-supplier/{id?}', [App\Http\Controllers\SupplierController::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
