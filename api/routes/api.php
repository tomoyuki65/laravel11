<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('v1')->group(function() {
    Route::post('/user', [UserController::class, 'create']);
    Route::get('/users', [UserController::class, 'users']);
    Route::get('/user/{uid}', [UserController::class, 'user']);
    Route::put('/user/{uid}', [UserController::class, 'update']);
    Route::delete('/user/{uid}', [UserController::class, 'delete']);
});
