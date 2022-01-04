<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainViewController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Main controller route
Route::get('/', [ MainViewController::class,'home' ]);
Route::get('chat', [ MainViewController::class,'chat' ]);
Route::get('post', [ MainViewController::class,'post' ]);

// login and register route auth
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
