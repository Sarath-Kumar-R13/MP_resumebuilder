<?php

namespace App\Http\Controllers\RESUME_Cs;
use App\Http\Controllers\Controller;

use App\Models\RESUME_M\CertificatesModel;
use Illuminate\Http\Request;

class CertificatesController extends Controller
 {
//     public function mainResume7(){
//         return view('ResumeTemplate.resume');
//     }

    public function certF(Request $request){
        $validated=$request->validate([
            'certificates'=>'required|string|max:1000'
        ]);

        CertificatesModel::create([
            'certificates'=>$validated['certificates']
        ]);

        return back()->with('success','Certificates added successfully');
    }
}
