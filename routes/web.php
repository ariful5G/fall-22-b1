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
use App\Http\Controller\ProductController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\frontend\LandingpageController;
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

//frontend route

Route::get('/home',[LandingpageController::class,'home']);




//backend route
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/do-login',[UserController::class,'doLogin'])->name('do.login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::group(['middleware'=>'auth'],function (){

Route::get('/User',[UserController::class,'list'])->name('user');
Route::get('/user/create',[UserController::class,'createForm']);
Route::post('/User/store',[UserController::class,'store'])->name('user.store');

Route::get('/admin',[AdminController::class,'home']);
Route::get('/',[MasterController::class,'home'])->name('dashboard');
Route::get('/Hotel',[Hotel::class,'Home']);
Route::get('/Guest',[GuestController::class,'list']);

Route::get('/Room_type',[Room_typeController::class,'list']);
Route::get('/roomtype/Details',[Room_typeController::class,'CreateForm'])->name('room_type.Details');
Route::post('/roomtype/store',[Room_typeController::class,'store'])->name('room_type.store');

Route::get('/Rooms',[RoomController::class,'vip']);
Route::get('/Booking',[BookingController::class,'list']);
Route::get('/Amenities',[AmenitiesController::class,'list']);
Route::get('/Payment',[PaymentController::class,'list']);
Route::get('/Reports',[ReportsController::class,'list']);

Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
Route::get('/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('/Category',[CategoryController::class,'list']);
});