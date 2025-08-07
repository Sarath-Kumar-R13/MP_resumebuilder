<?php

namespace App\Http\Controllers;

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
    public function register(Request $request){
        $validateData=$request->validate([
            'name'=>'required|string',
            'email'=>'required|string|email|regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
            'phone'=>'required|numeric|min:10',
            'password'=>'required|string',
            'confirm_password'=>'required|string|same:password'
        ]);
        $name=$request->post('name');
        $email=$request->post('email');
        $phone=$request->post('phone');
        $password=$request->post('password');
        $confirm_password=$request->post('confirm_password');
        
        $user=new resumeModel();
        $user->name=$name;
        $user->email=$email;
        $user->phone=$phone;
        $user->password=bcrypt($password);

        $user->save();
        return redirect('login');
    }
    
    // public function logout(Request $request){
    //     Auth:logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('index');
    // }
    public function resumeV(){
        return view('ResumeTemplate.resume');
    }
}
