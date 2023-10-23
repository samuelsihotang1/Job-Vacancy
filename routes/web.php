<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Job\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SociaLiteController;
use App\Livewire\Homepage;

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

Route::get('auth/{provider}', [SociaLiteController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SociaLiteController::class, 'handleProviderCallback']);

// Auth::routes(['verify' => true]);
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
  // Home
  // Route::get('/', [HomeController::class, 'index'])->name('home');
  Route::get('/', Homepage::class)->name('home');


  // Category
  Route::get('/category/{category:name_slug}', [HomeController::class, 'category'])->name('category');

  // Jobs
  Route::get('/job/{job:name_slug}', [JobController::class, 'index'])->name('job.index');
  Route::post('/job/{job:name_slug}', [JobController::class, 'applyJob'])->name('job.apply');
  Route::put('/job/{job:name_slug}', [JobController::class, 'updateApply'])->name('job.update');
});
