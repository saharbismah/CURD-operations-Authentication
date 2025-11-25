<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User  as Authenticatable;

class role extends Authenticatable
{
  
    protected $table='roles';
    protected $fillable=['name','email','password','role','active'];
}
