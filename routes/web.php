<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Arif;
use App\Http\Controllers\text;
use App\Http\Controllers\AdminController;
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

Route::get('/2',[text::class,'index']);
Route::get('/',[AdminController::class,'Home']);
Route::get('/3',[text::class,'index']);