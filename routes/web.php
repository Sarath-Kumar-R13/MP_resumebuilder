<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RbController;
use App\Http\Controllers\loginController;

// Route::get('/', function () {
//     return view('welcome');
// });

//=============================================================
//==Main Homepage==//
Route::get('/',function(){
    return view('Homepage.indexpage.index');
});
//routes and url(registration,login,logout).
//==============================================================
//=======================REGISTRATION======================================//
 Route::get('/register',[RbController::class,'regform'])->name('register');
 Route::post('/register',[RbController::class,'register']);
 //=========================LOGIN=========================================//
// Route::get('/login',function(){
//     return view('Login.login');
// });
 Route::get('/login',[loginController::class,'loginform'])->name('login');
 Route::post('/login',[loginController::class,'login']);
 //=========================LOGOUT=======================================//
 
 Route::post('/logout',[RbController::class,'logout']);
 //=========================RESUME======================================//
 Route::get('/ResV',function(){
    return view('ResumeTemplate.resume');
 });
