<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\signupController;
use App\Models\role;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//  SIGN-UP FORM task
Route::get('/signup',[signupController::class,'index']);
Route::post('/storedata',[signupController::class,'store'])->name('signup.store');
Route::get('/showdata',[signupController::class,'display'])->name('signup.display');
Route::get('editdata/{id}',[signupController::class,'edit'])->name('signup.edit');
Route::post('/updatedata/{id}',[signupController::class,'update'])->name('signup.update');
Route::delete('/deletedata/{id}',[signupController::class,'destroy'])->name('signup.destroy');

// AUTHENTICATION 
Route::get('/register',[authController::class,'showregister'])->name('auth.showregister');
Route::post('registerdata',[authController::class,'register'])->name('auth.register');
Route::get('/login',[authController::class,'showlogin'])->name('auth.showlogin');
Route::post('/login',[authController::class,'login'])->name('auth.login');
Route::get('/dashboard',[authController::class,'dashboard'])->name('show.dashboard')->middleware('auth');

// ROLE-bASED 
Route::get('/registerform',[RoleController::class,'formregister'])->name('form.formregister');
Route::post('/storeform',[RoleController::class,'storeRegister'])->name('form.storeRegister');
Route::get('/loginform',[RoleController::class,'formlogin'])->name('form.formlogin');
Route::post('/checklogin',[RoleController::class,'logincheck'])->name('form.logincheck');
Route::get('/dashboard2',[RoleController::class,'dashboardshow'])->name('display.dashboardshow');
Route::get('/userlist',[RoleController::class,'showusers'])->name('user.showusers');
Route::post('/userlists/{id}',[RoleController::class,'UpdateRole'])->name('user.UpdateRole');
Route::post('/userstatus/{id}',[RoleController::class,'UpdateStatus'])->name('user.UpdateStatus');
