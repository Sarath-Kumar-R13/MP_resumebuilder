<?php

use Illuminate\Support\Facades\Route;
//=================================================//
use App\Http\Controllers\REGISTRATION_C\RbController;
//================================================//
use App\Http\Controllers\LOGIN_C\loginController;
//================================================//
use App\Http\Controllers\MAIN_RESUME_C\MainResumeController;
use App\Http\Controllers\RESUME_C\PersonalInfoController;
use App\Http\Controllers\RESUME_C\WorkExperienceController;
use App\Http\Controllers\RESUME_C\PersonalProjectsController;
use App\Http\Controllers\RESUME_C\TechSkillsController;
use App\Http\Controllers\RESUME_C\AchievementsController;
use App\Http\Controllers\RESUME_C\OrganizationsController;
use App\Http\Controllers\RESUME_C\CertificatesController;
use App\Http\Controllers\RESUME_C\EducationController;
use App\Http\Controller\RESUME_C\LanguageController;

// use App\Http\Controllers\RESUME_C\PerInfController;

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

Route::get('/resume',[MainResumeController::class,'mainResume'])->name('resume.view');
// Route::get('/mainResume',function(){
//     return view('Resumetemplate.resume');
// });

 //==================================Personal info=========================================//
 
 Route::post('/mainResume/personalInfo',[PersonalInfoController::class,'pInfo'])->name('mainResume.personalInfo.store');

//   Route::post('/mainResume/personalInf',[PerInfController::class,'pInfo'])->name('mainResume.personalInf.store');

 //==============================Work experience===========================================//

 Route::post('/mainResume/workExp',[WorkExperienceController::class,'wExp'])->name('mainResume.workExp.store');

 //=====================================Personal Projects====================================//

 Route::post('/mainResume/personalPro',[PersonalProjectsController::class,'pPro'])->name('mainResume.personalPro.store');

 //======================================Tech skills=========================================//

 Route::post('/mainResume/techSkill',[TechSkillsController::class,'tSkills'])->name('mainResume.techSkill.store');

 //=======================================Achievements=======================================//

 Route::post('mainResume/achieve',[AchievementsController::class,'achieve'])->name('mainResume.achieve.store');

 //=======================================Organizations====================================//

 Route::post('mainResume/organ',[OrganizationsController::class,'organ'])->name('mainResume.organ.store');

 //=======================================Certificates=====================================//

 Route::post('mainResume/certif',[CertificatesController::class,'certF'])->name('mainResume.certif.store');

 //=======================================Education========================================//

 Route::post('mainResume/edu',[EducationController::class,'eduT'])->name('mainResume.edu.store');

 //=======================================language=========================================//

 Route::post('mainResume/lang',[LanguageController::class,'lang'])->name('mainResume.lang.store');
