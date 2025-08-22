<?php

namespace App\Http\Controllers\RESUME_C;
use App\Http\Controllers\Controller;

use App\Models\RESUME_M\PersonalInfoModel;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    // public function mainResume1(){
    //     return view('ResumeTemplate.resume');
    // }
    
    public function pInfo(Request $request){
            $validated=$request->validate([
                'name'=>'required|min:1',
                'job_title'=>'required|min:5',
                'description'=>'required|min:30',
                'email'=>'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
                'phone'=>'required|numeric|min:10',
                'location'=>'required',
                'github'=>'nullable|url',
                'image'=>'nullable|file|max:2048|mimes:jpeg,png,jpg,gif,svg,webp'
            ]);

    if($request->hasfile('file')){
        $imagepath=$request->file('image')->store('images','public');
        $validated['image']=$imagepath;
        }

        PersonalInfoModel::create($validated);
            return redirect()->back()->with('success','Resume submitted successfully');

    }    
}
