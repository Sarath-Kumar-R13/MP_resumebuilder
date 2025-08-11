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
            'position.*'=>'required|string|max:255',

            'company'=>'required|array',
            'company.*'=>'required|string|max:255',

            'from_date'=>'required|array',
            'from_date.*'=>'required|date',

            'to_date'=>'required|array',
            'to_date.*'=>'required|date',

            'work_location'=>'required|array',
            'work_location.*'=>'required|string|max:255',
        ]);
    
     foreach($validated['position'] as $index=>$position){
            WorkExperienceModel::create([
                'position'=>$position,
                'company'=>$validated['company'][$index],
                'from_date'=>$validated['from_date'][$index],
                'to_date'=>$validated['to_date'][$index],
                'work_location'=>$validated['work_location'][$index]
            ]);
    }
        return back()->with('success','Work experience saved successfully');

}
}

