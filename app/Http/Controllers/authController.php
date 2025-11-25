<?php

namespace App\Http\Controllers;

use App\Models\authModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class authController extends Controller
{
    public function showregister(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required|min:6',
            'email'=>'required|email'
        ]);
        authModel::create([
        'name'=>$request->name,
        'password'=>Hash::make($request->password),
        'email'=>$request->email
        ]);
        return redirect()->route('auth.login')->with('success','Data Entered');
    }
    public function showlogin(){
        return view('auth.login');
    }
    public function login(Request $request){
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
                 return  redirect()->route('show.dashboard');
        }
       return back()->with('error','Invalid email or password.');

    }

     public function dashboard(){
        return view('dashboard');
    }
    
}
