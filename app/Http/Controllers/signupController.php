<?php

namespace App\Http\Controllers;

use App\Models\signupModel;
use Illuminate\Http\Request;

class signupController extends Controller
{
    function index(){
        return view('signup');
    }
    function display(){
        $signup=signupModel::all();
        return view('signupTable',compact('signup'));
    }
    function store(Request $request){
    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'password'=>'required',
        'repeatpassword'=>'required'
    ]);
    signupModel::create([
      'name'=>$request->name,
      'email'=>$request->email,
      'password'=>$request->password,
      'repeatpassword'=>$request->repeatpassword
    ]);
    return redirect()->back()->with('success','Data entered successfully');
    }

    function edit($id){
        $signup=signupModel::findOrFail($id);
        return view('EditSignup',compact('signup'));
    }
    function update(Request $request,$id){
        $signup=signupModel::findOrFail($id);
        $signup->update([
      'name'=>$request->name,
      'email'=>$request->email,
      'password'=>$request->password,
      'repeatpassword'=>$request->repeatpassword
        ]);
return redirect('/signup')->with('success','Data updated successfully');
    }

    function destroy($id){
     $signup=signupModel::findOrFail($id);
     $signup->delete();
     return redirect('/signup')->with('success','Data deleted successfuly');
    }
}
