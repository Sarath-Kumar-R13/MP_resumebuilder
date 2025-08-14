<?php

namespace App\Http\Controllers;

use App\Models\RESUME_M\EducationModel;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    // public function mainResume8(){
    //     return view('ResumeTemplate.resume');
    // }

    public function eduT(Request $request){
        $validated=$request->validate([
            'course'=>'required|array',
            'course.*'=>'required|string|max:255',

            'name'=>'required|array',
            'name.*'=>'required|string|max:255',

            'from_date'=>'required|array',
            'from_date.*'=>'required|date',

            'to_date'=>'required|array',
            'to_date.*'=>'required|date'
        ]);

        foreach($validated['course'] as $index=>$course){
            EducationModel::create([
                'course'=>$course,
                'name'=>$validated['name'][$index],
                'from_date'=>$validated['from_date'][$index],
                'to_date'=>$validated['to_date'][$index]
            ]);
            
            return back()->with('success','Academic qualifications added successfully');
        }
    }
}
