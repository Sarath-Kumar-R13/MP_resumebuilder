<?php

namespace App\Http\Controllers;

use App\Models\RESUME_M\PersonalProjectsModel;
use Illuminate\Http\Request;

class PersonalProjectsController extends Controller
{
    public function mainResume3(){
        return view('ResumeTemplate.resume');
    }

    public function pPro(Request $request){
        $validated=$request->validate([
                'project'=>'required|array',
                'project.*'=>'required|string|max:255',

                'description'=>'required|array',
                'description.*'=>'required|string|max:1000'
        ]);

        foreach($validated['project'] as $index=>$project){
            PersonalProjectsModel::create([
                'project'=>$project,
                'description'=>$validated['description'][$index]
            ]);
        }
        return back()->with('success','Project added succesfully');
    }
}
