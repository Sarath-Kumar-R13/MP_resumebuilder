<?php

use Illuminate\Support\Facades\Route;
//=================================================//
use App\Http\Controllers\RbController;
//================================================//
use App\Http\Controllers\LOGIN_C\loginController;
//================================================//
use App\Http\Controllers\RESUME_C\MainResumeController;
use App\Http\Controllers\RESUME_C\PersonalInfoController;
use App\Http\Controllers\RESUME_C\WorkExperienceController;
use App\Http\Controllers\RESUME_C\PersonalProjectsController;
use App\Http\Controllers\RESUME_C\TechSkillsController;
use App\Http\Controllers\RESUME_C\AchievementsController;
use App\Http\Controllers\RESUME_C\OrganizationsController;
use App\Http\Controllers\RESUME_C\CertificatesController;
use App\Http\Controllers\RESUME_C\EducationController;
use App\Http\Controller\RESUME_C\LanguageController;

// Route::get('/', function () {
//     return view('welcome');
// });

//============================================================================//
//===========================Main Homepage===================================//
Route::get('/',function(){
    return view('Homepage.indexpage.index');
});
//routes and url(registration,login,logout).
//==========================================================================//
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

//  Route::get('/ResV',function(){
//     return view('ResumeTemplate.resume');
//  });

 //==============================Main resume view========================================//

// Route::get('/resume',[MainResumeController::class,'mainResume'])->name('resume.view');
Route::get('/mainResume',function(){
    return view('Resumetemplate.resume');
});

 //==================================Personal info=========================================//
 
 Route::post('/mainResume/personalInf',[PersonalInfoController::class,'pInfo'])->name('personalInf.store');

 //==============================Work experience===========================================//

 Route::post('/mainResume/workEx',[WorkExperienceController::class,'wExp'])->name('workEx.store');

 //=====================================Personal Projects====================================//

 Route::post('/mainResume/personalPro',[PersonalProjectsController::class,'pPro'])->name('personalPro.store');

 //======================================Tech skills=========================================//

 Route::post('/mainResume/techS',[TechSkillsController::class,'tSkills'])->name('techS.store');

 //=======================================Achievements=======================================//

 Route::post('mainResume/achiV',[AchievementsController::class,'achieve'])->name('achiV.store');

 //=======================================Organizations====================================//

 Route::post('mainResume/organize',[OrganizationsController::class,'organ'])->name('organize.store');

 //=======================================Certificates=====================================//

 Route::post('mainResume/certify',[CertificatesController::class,'certF'])->name('certify.store');

 //=======================================Education========================================//

 Route::post('mainResume/education',[EducationController::class,'eduT'])->name('education.store');

 //=======================================language=========================================//

 Route::post('mainResume/language',[LanguageController::class,'lang'])->name('language.store');
