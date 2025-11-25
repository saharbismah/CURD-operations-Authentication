<?php

namespace App\Http\Controllers;

use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    function formregister(){
        return view('auth.formregister');
    }
    function storeRegister(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
             'email'=>'required|email',
              'password'=>'required|min:6'
        ]);
        role::create([
           'name'=>$request->name,
            'email'=>$request->email,
             'password'=>Hash::make($request->password),
             'role'=>1,
             'status'=>'active',
        ]);
        return redirect()->route('form.formlogin')->with('success','Data entered successfully');
    }
    function formlogin(){
        return view('auth.formlogin');
    }

    function logincheck(Request $request){
 $credentials=$request->only('email','password');
 if(Auth::attempt($credentials)){
    if(Auth::user()->status =='inactive'){
            Auth::logout();
            return back()->with('error','Your account is Inactive, Contact Admin');
    }
    session(['user' => Auth::user()->name]);
    return redirect()->intended('/dashboard2');
 }
 return back()->with('error','Invalid Email Or Password');
    }
    function dashboardshow(){
   $user=Auth::user();
   if($user->role == 1){
    return view('auth.user');
   }
   elseif($user->role == 0){
    return view('auth.admin');
   }
   else{
    abort(403,'Unauthorized Access');
   }
    }
    function showusers(){
        $user=role::all();
        return view('auth.usertable',compact('user'));
    }
    function UpdateRole(Request $request,$id){
        $user=role::findorfail($id);
        $request->validate([
            'role'=>'required|in:0,1'
        ]);
        $user->role = $request->role;
        $user->save();
         return redirect()->route('user.showusers')->with('success','Role is Updated Successfully');
    }
     function UpdateStatus(Request $request,$id){
        $user=role::findorfail($id);
        $request->validate([
            'status'=>'required|in:active,inactive'
        ]);
        $user->status = $request->status;
        $user->save();
         return redirect()->route('user.showusers')->with('success','User status Updated Successfully');
    }

}