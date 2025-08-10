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
    
     foreach($request->position as $index=>$position){
            WorkExperienceModel::create([
                'position'=>$position,
                'company'=>$request->company[$index],
                'from_date'=>$request->from_date[$index],
                'to_date'=>$request->to_date[$index],
                'work_location'=>$request->to_date[$index],
            ]);
    }
        return back()->with('success','Work experience saved successfully');

}
}

