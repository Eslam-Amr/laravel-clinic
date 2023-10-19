<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\majorController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[homeController::class,'index'])->name('home.index');
Route::get('/major',[majorController::class,'index'])->name('major.index');
Route::get('/major/{id}',[majorController::class,'majordoc'])->name('major.majordoc');
Route::get('/doctor',[doctorController::class,'index'])->name('doctor.index');
Route::get('/doctor/{id}',[doctorController::class,'docDetails'])->name('doctor.detalis');
Route::get('/doctor/{id}/booking',[doctorController::class,'docBook'])->name('doctor.booking');
Route::get('/login',[loginController::class,'index'])->name('login.index');
Route::get('/login/auth',[loginController::class,'auth'])->name('login.auth');
Route::get('/logout',[loginController::class,'logout'])->name('login.logout');
Route::get('/register',[registerController::class,'index'])->name('register.index');
Route::get('/register/add',[registerController::class,'addUser'])->name('register.addUser');
Route::get('/contact',[contactController::class,'index'])->name('contact.index');
Route::get('/contact/add',[contactController::class,'addContact'])->name('contact.add');
Route::get('/admin',[adminController::class,'index'])->name('admin.index');
Route::get('/admin/addDoctor',[adminController::class,'addDoctor'])->name('admin.addDoctor');
Route::get('/admin/contact',[adminController::class,'contact'])->name('admin.contact');
Route::get('/admin/booking',[adminController::class,'booking'])->name('admin.booking');
Route::get('/admin/booking/{id}/delete',[adminController::class,'deleteBooking'])->name('admin.bookingDelte');
Route::get('/admin/booking/{id}/rej',[adminController::class,'rejBooking'])->name('admin.bookingrej');
Route::get('/admin/booking/{id}/pen',[adminController::class,'penBooking'])->name('admin.bookingpen');
Route::get('/admin/booking/{id}/comp',[adminController::class,'compBooking'])->name('admin.bookingcomp');
Route::get('/admin/addMajor',[adminController::class,'addMajor'])->name('admin.addMajor');
Route::post('/admin/addMajor/add',[adminController::class,'addM'])->name('admin.addM');
Route::get('/admin/users',[adminController::class,'disUsers'])->name('admin.users');
Route::get('/admin/users/{id}/edit',[adminController::class,'editUser'])->name('admin.userEdit');
Route::put('/admin/users/{id}/update',[adminController::class,'updateUser'])->name('admin.userUpdate');
Route::get('/admin/users/{id}/deleteUser',[adminController::class,'deleteUser'])->name('admin.userDelete');
Route::post('/admin/addDoctor/add',[adminController::class,'addD'])->name('admin.add');
Route::get('/admin/users/{id}/readmessage',[adminController::class,'deleteMessage'])->name('admin.messageDelete');
// Route::get('/admin',[,'index'])->name('admin.index');

