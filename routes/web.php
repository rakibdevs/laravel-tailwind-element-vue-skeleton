<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class,'index']);

Route::get('/login', [AuthController::class,'index'])->name('login');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::get('/logout', [AuthController::class,'logout']);
Route::post('/login', [AuthController::class,'login']);

Route::group(['middleware' => 'auth'], function(){
	Route::get('/admin/', [AdminController::class,'dashboard']);
});





