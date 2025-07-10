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
            'confirm password'=>'required|string|same:password'
        ]);
        $name=$request->post('name');
        $email=$request->post('email');
        $phone=$request->post('phone');
        $password=$request->post('password');
        $confirm_password=$request->post('confirm_password');
        return redirect('login');
    }
    public function loginform(){
        return view('login');
    }
    public function login(Request $request){
        $validateData=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
        // $email=$request->post('email');
        // $password=$request->post('password');
        //  return redirect('index');
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('index');
        }
        return back()->withErrors([
            'email'=>'The provided credentials do not match our records.'
        ]);
    }
    public function logout(Request $request){
        Auth:logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('index');
    }
}
