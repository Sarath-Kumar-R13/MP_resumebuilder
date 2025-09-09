<?php

namespace App\Http\Controllers\MAIN_RESUME_C;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\RESUME_M\PersonalInfoModel;
use App\Models\RESUME_M\PersonalProjectsModel;
use App\Models\RESUME_M\WorkExperienceModel;
use App\Models\RESUME_M\TechSkillsModel;
use App\Models\RESUME_M\AchievementsModel;
use App\Models\RESUME_M\OrganizationsModel;
use App\Models\RESUME_M\CertificatesModel;
use App\Models\RESUME_M\EducationModel;
use App\Models\RESUME_M\LanguageModel;

class MainResumeController extends Controller
{
    // public function mainResume(){
    //     $personalInfo=PersonalInfoModel::latest()->first();
    //     $workExp=WorkExperienceModel::all();
    //     $personalPro=PersonalProjectsModel::all();
    //     $techSkill=TechSkillsModel::all();
    //     $achieve=AchievementsModel::all();
    //     $organ=OrganizationsModel::all();
    //     $certif=CertificatesModel::all();
    //     $edu=EducationModel::all();
    //     $lang=LanguageModel::all();

    //     return view('ResumeTemplate.resume',compact(
    //         'personalInfo','workExp','personalPro','techSkill',
    //         'achieve','organ','certif','edu','lang'
    //     ));
    // }
    public function storeData(Request $request){
        (new PersonalInfoController)->pInfo($request);
        (new WorkExperienceController)->wExp($request);
        (new PersonalProjectsController)->pPro($request);
        (new TechSkillsController)->tSkills($request);
        (new AchievementsController)->achieve($request);
        (new OrganizationsController)->organ($request);
        (new CertificatesController)->certf($request);
        (new EducationController)->edu($request);
        (new LanguageController)->lang($request);
    }
}
