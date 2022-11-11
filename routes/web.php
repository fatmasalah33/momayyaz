<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\TicketController;
use App\Http\Controllers\web\DetailsController;
use App\Http\Controllers\admin\LoginController;
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
Route::post('/login-user', [LoginController::class,'loginuser'])->name('loginuser');
Route::get('/',[HomeController::class,'index']);
Route::post('/store',[HomeController::class,'store']);
Route::get('/ticket',[TicketController::class,'index']);
Route::post('/ticket/store',[TicketController::class,'store']);
Route::get('/details/show/{id}',[DetailsController::class,'show']);
Route::get('/login', [LoginController::class,'index']);
Route::prefix('/dashboard')->middleware('IsLoggedIn')->group(function (){
    Route::get('/', [App\Http\Controllers\admin\HomeController::class, 'index']);
});
