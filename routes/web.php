<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminBookingPageController;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('home', [HomeController::class, 'homeController'])->name('home');

Route::get('contactpage',[ContactController::class,'create']);
Route::post('contactpagestore',[ContactController::class,'store']);
Route::view('authenticate', 'loginpage');
Route::post('authenticate/registration', [LoginController::class, 'registration'])->name('registration');
Route::post('authenticate/login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout']);

Route::get('home/bookingpage', [BookingController::class, 'create'])->name('booking');
Route::post('home/bookingstore', [BookingController::class, 'store'])->name('bookingstore');
Route::get('home/bookingindex', [BookingController::class, 'index'])->name('bookingindex')->middleware('auth');
Route::delete('home/bookingdelete/{id}', [BookingController::class, 'destroy'])->name('bookingdelete')->middleware('auth');

Route::prefix('admin')->middleware('foradmin')->group(function () {
    Route::get('/', [AdminController::class, 'admingpage'])->name('admin');
    Route::get('createroom', [RoomController::class, 'create']);
    Route::post('storeroom', [RoomController::class, 'store']);
    Route::get('roomsview', [RoomController::class, 'index']);
    Route::delete('roomsdelete/{id}', [RoomController::class, 'destroy']);
    Route::get('roomseditform/{id}', [RoomController::class, 'edit']);
    Route::put('roomsupdate/{id}', [RoomController::class, 'update']);
    Route::get('frontstaff', [StaffController::class, 'index']);
    Route::get('/staffbydepartment/{id}', [DepartmentController::class, 'show']);
    Route::get('createstaff/{id}', [StaffController::class, 'create']);
    Route::post('storestaff/{id}', [StaffController::class, 'store']);
    Route::get('staffeditform/{id}', [StaffController::class, 'edit']);
    Route::put('staffupdate/{id}', [StaffController::class, 'update']);
    Route::delete('staffdelete/{id}', [StaffController::class, 'destroy']);
    Route::get('services', [ServiceController::class, 'index']);
    Route::get('servicecreate', [ServiceController::class, 'create']);
    Route::post('servicesstore', [ServiceController::class, 'store']);
    Route::get('serviceedit/{id}', [ServiceController::class, 'edit']);
    Route::put('serviceupdate/{id}', [ServiceController::class, 'update']);
    Route::delete('servicedelete/{id}', [ServiceController::class, 'destroy']);
    Route::get('admingbookingpage', [AdminBookingPageController::class, 'index']);
     Route::delete('admingbookingpage/{id}', [AdminBookingPageController::class, 'destroy']);
     Route::get('contactpagequeries',[ContactController::class,'index']);
     Route::delete('contactpagequeries{id}',[ContactController::class,'destroy']);
});



// 








