<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Order;
use App\Http\Controllers\MasterController;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\text;
// use App\Http\Controllers\Arif;

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
Route::get('/orders',[Order::class,'Home']);
Route::get('/',[MasterController::class,'home']);
// Route::get('/1',[AdminController::class,'Home']);
// Route::get('/sbadmin',[text::class,'index']);
// Route::get('/welcome',[Arif::class,'Home']);
