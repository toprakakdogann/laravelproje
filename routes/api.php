<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::any('/v1/login', [\App\Http\Controllers\Auth\AuthController::class, "login"]);
Route::resource('/v1/product', \App\Http\Controllers\ProductController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
