<?php

namespace App\Http\Controllers\LOGIN_C;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\loginModel;

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
