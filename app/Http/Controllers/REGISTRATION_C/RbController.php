<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\resumeModel;


class RbController extends Controller
{
    public function index(){
        return view('Homepage.indexpage.index');
    }
    
    public function regform(){
        return view('Registration/register');
     }
    // public function register(Request $request){
    //     $validateData=$request->validate([
    //         'name'=>'required|string',
    //         'email'=>'required|string|email|regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
    //         'phone'=>'required|numeric|min:10',
    //         'password'=>'required|string',
    //         'confirm_password'=>'required|string|same:password'
    //     ]);
    //     $name=$request->post('name');
    //     $email=$request->post('email');
    //     $phone=$request->post('phone');
    //     $password=$request->post('password');
    //     $confirm_password=$request->post('confirm_password');
        
    //     $user=new resumeModel();
    //     $user->name=$name;
    //     $user->email=$email;
    //     $user->phone=$phone;
    //     $user->password=bcrypt($password);

    //     $user->save();
   

        public function register(Request $request){
            $validated = $request->validate([
                'name' => 'required|string|min:5|max:255',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required|digits:10',
                'password' => 'required|string|min:8|confirmed'
            ]);


            resumeModel::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'password' => Hash::make($validated['password']),
            ]);

    // return back()->with('success', 'Registration successful!');
        return redirect('login');
    }   
    
    
       public function resumeV(){
        // return back()->with('success','Resume submitted');
        return view('ResumeTemplate.resume');
    }
}

