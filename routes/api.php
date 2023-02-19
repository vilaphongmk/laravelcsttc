<?php

use App\Http\Controllers\Apis\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// public route
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/', [AuthController::class, 'error'])->name('login');



Route::group(['middleware' => "auth:sanctum"], function () {
    Route::post('/auth/me', [AuthController::class, 'me']);
    Route::get('/logout', [AuthController::class, 'logout']);
});
