<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/buy', [IndexController::class,'buy']);
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/postlogin', [AuthController::class,'postlogin'])->middleware("throttle:5,1");
Route::get('/logout', [AuthController::class,'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    });
});



/* Route::get('/', function () {
    return view('index');
}); */
