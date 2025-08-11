<?php

namespace App\Http\Controllers;

use App\Models\RESUME_M\OrganizationsModel;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function mainResume6(){
        return view('ResumeTemplate.resume');
    }

    public function organ(Request $request){
        $validated=$request->validate([
            'organizations'=>'required|string|max:255',
            'from_date'=>'required|date',
            'to_date'=>'required|date'
        ]);

        OrganizationsModel::create([
            'organizations'=>$validated['organizations'],
            'from_date'=>$validated['from_date'],
            'to_date'=>$validated['to_date']
        ]);
        return back()->with('success','Recent workplace added successfully');
    }
}
