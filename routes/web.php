<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\TicketController;
use App\Http\Controllers\web\DetailsController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\NotificationsController;
use App\Http\Controllers\admin\CountriesController;
use App\Http\Controllers\admin\BannerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|   Route::get('/', [App\Http\Controllers\admin\HomeController::class, 'index']);
*/

Route::get('/',[HomeController::class,'index']);
Route::post('/store',[HomeController::class,'store']);
Route::get('/ticket',[TicketController::class,'index']);
Route::get('/ticket/send',[TicketController::class,'send']);
Route::get('/countries',[HomeController::class,'all']);
Route::post('/ticket/store',[TicketController::class,'store']);
Route::get('/details/show/{id}',[DetailsController::class,'show']);
Route::get('/login', [LoginController::class,'index']);
Route::post('/login-user', [LoginController::class,'loginuser'])->name('loginuser');
Route::get('logout',[LoginController::class,'logout']);
Route::prefix('/dashboard')->middleware('IsLoggedIn')->group(function (){
    Route::get('/',  [BannerController ::class, 'index']);
    Route::get('/notifications', [NotificationsController::class, 'index']);
    Route::get('/notifications/show/{id}', [NotificationsController::class, 'show']);
    Route::get('/countries', [CountriesController ::class, 'index']);
    Route::get('/countries/show/{id}', [CountriesController::class, 'show']);
    Route::post('/countries/store',[CountriesController::class,'store']);
    Route::get('/banners', [BannerController ::class, 'index']);
    Route::post('/banners/store',[BannerController::class,'store']);

});
