<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth::routes(['verify' => true]);

// Route::group(['middleware' => 'guest'], function () {
Auth::routes();
// });

Route::group(['middleware' => 'auth'], function () {
  Route::get('/', [HomeController::class, 'index'])->name('home');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
