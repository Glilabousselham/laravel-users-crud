<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => "/auth", 'middleware' => ['not_login']], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::view('/login', "auth.login");
});

Route::get('/auth/logout', [AuthController::class, 'logout'])->middleware(['login']);

Route::resource('/users', UserController::class)->middleware(['admin']);