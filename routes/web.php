<?php

use App\Http\Controllers\contactController;
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
Route::get('/Home',[homeController::class,'index'])->name('home.index');
Route::get('/major',[majorController::class,'index'])->name('major.index');
Route::get('/major/{id}',[majorController::class,'majordoc'])->name('major.majordoc');
Route::get('/doctor',[doctorController::class,'index'])->name('doctor.index');
Route::get('/doctor/{id}',[doctorController::class,'docDetails'])->name('doctor.detalis');
Route::get('/login',[loginController::class,'index'])->name('login.index');
Route::get('/register',[registerController::class,'index'])->name('register.index');
Route::get('/contact',[contactController::class,'index'])->name('contact.index');
