<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\RecordController;

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


Route::get('/abha',[LoginController::class,'index'])->name('session');
Route::post('/home',[LoginController::class,'login'])->name('loginSession');
Route::get('/homepage',[LoginController::class,'homepage'])->name('homepage');
Route::post('/doctorLogin',[LoginController::class,'doctorLogin'])->name('doctorLogin');
Route::post('/abha',[LoginController::class,'logout'])->name('logoutSession');
Route::view('/terms', 'terms')->name('terms');


Route::get('/signup',[SignupController::class,'showForm'])->name('signup');
Route::get('/docsignup',[SignupController::class,'showFormDoc'])->name('docsignup');
Route::post('/process',[SignUpController::class,'processReg']);
Route::post('/docprocess',[SignUpController::class,'processDoc']);

Route::get('/prescription/{abha_number}', [PrescriptionController::class, 'prescription'])->name('prescript');
Route::get('/writeprescription/{abha_number}', [PrescriptionController::class, 'writeprescription'])->name('writeprescript');
Route::post('/processPrescription',[PrescriptionController::class,'processPrescription']);


Route::get('/record/{abha_number}',[RecordController::class,'allrecord'])->name('showRecords');
Route::get('/history',[RecordController::class,'checkHistory'])->name('history');
Route::get('/showSearch',[RecordController::class,'showSearch']);


