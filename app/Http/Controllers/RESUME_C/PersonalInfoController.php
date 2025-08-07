<?php

namespace App\Http\Controllers;

use App\Models\RESUME_M\PersonalInfoModel;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function mainResume(){
        return view('ResumeTemplate.resume');
    }
    
    public function pInfo(Request $request){
            $validated=$request->validate([
                'name'=>'required|minlength:5',
                'job_title'=>'required|minlength:5',
                'description'=>'required',
                'email'=>'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
                'phone'=>'required|number|minlength:10',
                'location'=>'required',
                'github'=>'nullable|url',
                'image'=>'nullable|file|max:2048|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

    if($request->hasfile('file')){
        $path=$request->file('image')->store('images','public');
        $validated['image']=$imagepath;
        }

        PersonalInfoModel::create($validated);
            return redirect()->back()->with('success','Resume submitted successfully');

    }    
}
