<?php

namespace App\Http\Controllers\RESUME_C;

use App\Models\RESUME_M\TechSkillsModel;
use Illuminate\Http\Request;

class TechSkillsController extends Controller
{
    // public function mainResume4(){
    //     return view('ResumeTemplate.resume');
    // }

    public function tSkills(Request $request){
        $validated=$request->validate([
            'skill'=>'required|array',
            'skill.*'=>'required|string|max:255'
        ]);

        foreach($validated['skill'] as $index=>$skill){
            TechSkillsModel::create([
                'skill'=>$skill
            ]);
        }
        return back()->with('success','Skills added successfully');
    }
}
