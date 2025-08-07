<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\loginController;

class loginController extends Controller
{
    public function loginform(){
        return view('Login.login');
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
}
