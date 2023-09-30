<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Job\JobController;
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
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
  // Home
  Route::get('/', [HomeController::class, 'index'])->name('home');

  // Category
  Route::get('/category/{category:name_slug}', [HomeController::class, 'category'])->name('category');

  // Jobs
  Route::get('/{job:name_slug}', [JobController::class, 'index'])->name('job.index');
});
