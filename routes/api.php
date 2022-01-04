<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;


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
Route::resource('users', UserController::class);

// Add login route because Laravel needs it (Or add Accept: application/json to all requests),
Route::get('/login', function () {
    return response()->json([
      'status_code' => 400,
      'message' => 'error'
    ]);
  })->name('login');

//   Route::resource('posts', PostController::class)->except('store');



// Login user


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
