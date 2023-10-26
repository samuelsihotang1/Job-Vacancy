<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SociaLiteController;
use App\Livewire\Homepage;
use App\Livewire\JobController;

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
  Route::get('/', Homepage::class)->name('home');

  // Jobs
  Route::get('/job/{job:name_slug}', JobController::class)->name('job');
});
