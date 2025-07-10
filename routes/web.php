<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RbController;

// Route::get('/', function () {
//     return view('welcome');
// });

//=============================================================

Route::get('/',function(){
    return view('Homepage.indexpage.index');
});
//routes and url(registration,login,logout).
//==============================================================
 Route::get('/register',[RbController::class,'regform'])->name('register');
 Route::post('/register',[RbController::class,'register']);
 Route::get('/login',[RbController::class,'loginform'])->name('login');
 Route::post('/login',[RbController::class,'login']);
 Route::post('/logout',[RbController::class,'logout']);
