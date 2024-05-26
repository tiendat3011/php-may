<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\AuthenticateMiddleware;

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

Route::get('/123', function () {
    return view('welcome');
});

/* BACKEND */
Route::get('/', [DashboardController::class , 'index'])->name('dashboard.index')->middleware('admin');

/* USER */
Route::group(['prefix' =>'user',],function(){
    Route::get('index', [App\Http\Controllers\Backend\UserController::class , 'index'])->name('user.index')->middleware(AuthenticateMiddleware::class);
    Route::get('create', [App\Http\Controllers\Backend\UserController::class , 'create'])->name('user.create')->middleware(AuthenticateMiddleware::class);
});


// Route::get('user/update', [App\Http\Controllers\Backend\UserController::class , 'update'])->name('user.index')->middleware(AuthenticateMiddleware::class);
// Route::get('user/delelete', [App\Http\Controllers\Backend\UserController::class , 'delelete'])->name('user.index')->middleware(AuthenticateMiddleware::class);


Route::get('admin', [AuthController::class , 'index'])->name('auth.admin');
Route::get('logout', [AuthController::class , 'logout'])->name('auth.logout');
Route::post('login', [AuthController::class , 'login'])->name('auth.login');

