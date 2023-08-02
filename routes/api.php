<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\AuthController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/adduser', [UserController::class, 'store']);
Route::post('/auth/login', [AuthController::class, 'loginUser'])->name('login');
// Route::apiResource('posts', PostController::class)->middleware('auth:sanctum');

// Route::get('/login', [AuthController::class, 'loginUser'])->name('login');
