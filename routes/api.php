<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::group(['prefix' => 'restaurants', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [RestaurantController::class, 'index']);
    Route::post('/', [RestaurantController::class, 'store']);
    Route::get('/{restaurant}', [RestaurantController::class, 'show']);
    Route::put('/{restaurant}', [RestaurantController::class, 'update']);
    Route::delete('/{restaurant}', [RestaurantController::class, 'destroy']);
});
