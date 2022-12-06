<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

use App\Http\Controllers\frontend\LandingpageController;
use App\Http\Controllers\HotelController;

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

//route for frontend
Route::get('/',[LandingpageController::class,'home'])->name('website');
Route::post('/Registration',[LandingpageController::class,'signup'])->name('registration');
Route::post('/Login',[LandingpageController::class,'login'])->name('user.login');
Route::get('/Logout',[LandingpageController::class,'logout'])->name('user.logout');
Route::get('room_type/view/{roomView}',[LandingpageController::class,'roomView'])->name('frontend.room.view');
Route::get('/booking_form/{room_id}',[LandingpageController::class,'viewBookingForm'])->name('booking.form');
Route::post('/booking_form/store/{room_id}',[LandingpageController::class,'store'])->name('booking.store');





//route for backend
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/do-login',[UserController::class,'doLogin'])->name('do.login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');


Route::group(['middleware'=>['auth','CheckAdmin'],'prefix'=>'admin'],function (){

Route::get('/',[MasterController::class,'home'])->name('dashboard');

Route::get('/user',[UserController::class,'list'])->name('user');
Route::get('/user/create',[UserController::class,'createForm'])->name('users.create');
Route::post('/user/store',[UserController::class,'store'])->name('user.store');

Route::get('/admin',[AdminController::class,'home'])->name('admin');


Route::get('/Hotel',[HotelController::class,'Home'])->name('hotel');
Route::get('/Hotel/create',[HotelController::class,'create'])->name('hotel.create');
Route::post('/hotel/store',[HotelController::class,'store'])->name('hotel.store');
Route::get('/hotel/delete/{holelInfoDelete}',[HotelController::class,'infoDelete'])->name('hotelinfo.delete');
Route::get('hotel/edit/{hotelEdit}',[HotelController::class,'hotelEdit'])->name('admin.hotel.edit');
Route::put('hotel/edit/{hotelUpdate}',[HotelController::class,'hotelUpdate'])->name('admin.hotel.update');
Route::get('hotel/view/{hotelView}',[HotelController::class,'hotelView'])->name('admin.hotel.view');



Route::get('/Guest',[GuestController::class,'list'])->name('guest');
Route::get('/Guest/create',[GuestController::class,'create'])->name('guest.create');

Route::get('/Room_type',[Room_typeController::class,'list'])->name('room_type');
Route::get('/roomtype/Details',[Room_typeController::class,'CreateForm'])->name('room_type.Details');
Route::post('/roomtype/store',[Room_typeController::class,'store'])->name('room_type.store');
Route::get('room_type/delete/{roomDelete}',[Room_typeController::class,'roomdelete'])->name('admin.room.delete');
Route::get('room_type/view/{roomView}',[Room_typeController::class,'roomView'])->name('admin.room.view');
Route::get('room_type/edit/{roomEdit}',[Room_typeController::class,'roomEdit'])->name('admin.room.edit');
Route::put('room_type/edit/{roomUpdate}',[Room_typeController::class,'Update'])->name('admin.room.update');

Route::get('/Rooms',[RoomController::class,'vip'])->name('rooms');
Route::get('/Rooms/create',[RoomController::class,'createform'])->name('rooms.create');
Route::post('/room/store',[RoomController::class,'store'])->name('room.store');
Route::get('room/delete/{roomDelete}',[RoomController::class,'roomdelete'])->name('room.delete');
Route::get('room/edit/{roomEdit}',[RoomController::class,'roomEdit'])->name('room.edit');
Route::put('room/edit/{roomUpdate}',[RoomController::class,'Update'])->name('room.update');
Route::get('room/view/{roomView}',[RoomController::class,'roomView'])->name('room.view');



Route::get('/Booking',[BookingController::class,'list'])->name('booking');

Route::get('/Amenities',[AmenitiesController::class,'list'])->name('amenities');
Route::get('/Amenities/create',[AmenitiesController::class,'create'])->name('amenities.create');
Route::post('/Amenities/store',[AmenitiesController::class,'store'])->name('amenities.store');

Route::get('/Payment',[PaymentController::class,'list'])->name('payment');
Route::get('/Reports',[ReportsController::class,'list'])->name('reports');

});