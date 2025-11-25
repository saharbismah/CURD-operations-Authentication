<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class signupModel extends Model
{
    protected $table="signup";
    protected $fillable=['name','email','password','repeatpassword'];
}
