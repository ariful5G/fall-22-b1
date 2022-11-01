<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\Hotel;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Room_typeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportsController;

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
Route::get('/',[MasterController::class,'home']);
Route::get('/Hotel',[Hotel::class,'Home']);
Route::get('/User',[UserController::class,'list']);
Route::get('/Guest',[GuestController::class,'list']);
Route::get('/Room_type',[Room_typeController::class,'list']);
Route::get('/Rooms',[RoomController::class,'vip']);
Route::get('/Booking',[BookingController::class,'list']);
Route::get('/Amenities',[AmenitiesController::class,'list']);
Route::get('/Payment',[PaymentController::class,'list']);
Route::get('/Reports',[ReportsController::class,'list']);
Route::post('/User/store',[UserController::class,'store'])->name('user.store');
