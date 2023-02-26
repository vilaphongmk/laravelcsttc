<?php

use App\Http\Controllers\Apis\AuthController;
use App\Http\Controllers\Apis\RulesController;
use App\Http\Controllers\Apis\UserController;
use Illuminate\Support\Facades\Route;


// public route
Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
Route::get('/', [AuthController::class, 'error'])->name('login');
Route::post('/user/create', [UserController::class, 'createUser']);
Route::get('/city', [UserController::class, 'city']);



Route::group(['middleware' => "auth:sanctum"], function () {
    Route::get('/auth/me', [AuthController::class, 'me']);
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/rules', [RulesController::class, 'get']);
    Route::post('/rule/create', [RulesController::class, 'create']);
    Route::post('/rule/update', [RulesController::class, 'update']);
    Route::delete('/rule/delete/{id}', [RulesController::class, 'delete']);
});
