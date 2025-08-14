<?php

namespace App\Http\Controllers;

use App\Models\RESUME_M\AchievementsModel;
use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    // public function mainResume5(){
    //     return view('ResumeTemplate.resume');
    // }

    public function achieve(Request $request){
        $validated=$request->validate([
          'achievements'=>'required|string|max:1000'  
        ]);

        AchievementsModel::create([
            'achievements'=>$validated['achievements']
        ]);

        return back()->with('success','Achievements added');
    }
}
