<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\Api\HelloWorldController;

Route::get('/hello', [HelloWorldController::class, 'index']);
Route::get('/hello/{id}', [HelloWorldController::class, 'show']);
Route::post('/hello', [HelloWorldController::class, 'store']);
Route::put('/hello/{id}', [HelloWorldController::class, 'update']);
Route::delete('/hello/{id}', [HelloWorldController::class, 'destroy']);