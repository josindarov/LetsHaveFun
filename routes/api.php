<?php

use App\Http\Controllers\User\Auth\UserLoginController;
use App\Http\Controllers\User\Auth\UserLogOutController;
use App\Http\Controllers\User\Auth\UserRegisterController;
use App\Http\Controllers\User\UserIndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('user/index', UserIndexController::class);
Route::post('user/register', UserRegisterController::class);
Route::post('user/login', UserLoginController::class);
Route::post('user/logout', UserLogoutController::class);
