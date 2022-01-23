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
Route::get('news', [ MainViewController::class,'news' ]);

Route::get('chat', [ MainViewController::class,'chat' ]);
Route::post('chat', [ MainViewController::class,'chat' ]);

Route::get('post', [ MainViewController::class,'post' ])->name('post');
Route::get('post/{slug}', [ MainViewController::class,'show' ])->name('post');

Route::get('form', [ MainViewController::class,'form' ]);



// login and register route auth
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
