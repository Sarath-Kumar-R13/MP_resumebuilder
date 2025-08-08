<?php

namespace App\Http\Controllers;

use App\Models\RESUME_M\WorkExperienceModel;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function mainResume2(){
        return view('ResumeTemplate.resume');
    }
    public function wExp(Request $request){
        $validated=$request->validate([
            'position'=>'required|array',
            'company'=>'required|array',
            'from_date'=>'required|array',
            'to_date'=>'required|array',
        ]);
    }
    
}
