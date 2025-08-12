<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainResumeController extends Controller
{
    public function mainResume(){
        $personalInfo=PersonalInfoModel::latest()->first();
        $workExp=WorkExperienceModel::all();
        $personalPro=PersonalProjectsModel::all();
        $techSkill=TechSkillsModel::all();
        $achieve=AchievementsModel::all();
        $organ=OrganizationsModel::all();
        $certif=CertificatesModel::all();
        $edu=EducationModel::all();
        $lang=LanguageModel::all();

        return view('ResumeTemplate.resume',compact(
            'personalInfo','workExp','personalPro','techSkill',
            'achieve','organ','certif','edu','lang'
        ));
    }
}
