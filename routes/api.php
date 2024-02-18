<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

// Jobs
Route::apiResource('/jobs', JobController::class);

// Employers
Route::apiResource('/employers', EmployerController::class);

// Users
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users', [UserController::class, 'update']);
Route::delete('/users', [UserController::class, 'destroy']);

// auth
Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class, 'login']);


// Categories
Route::apiResource('/categories', CategoryController::class);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
