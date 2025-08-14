<?php

namespace App\Http\Controllers;

use App\Models\RESUME_M\languageModel;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    // public function mainResume9(){
    //     return view('ResumeTemplate.resume');
    // }

    public function lang(Request $request){
        $validated=$request->validate([
            'language'=>'required|array',
            'language.*'=>'required|string|max:255'
        ]);

        foreach($validated['language'] as $index=>$language){
            languageModel::create([
                'language'=>$language
            ]);
        }
        return back()->with('success','Language added successfully');
    }
}
