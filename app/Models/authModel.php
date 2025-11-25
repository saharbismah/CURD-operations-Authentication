<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable ;
use Illuminate\Notifications\Notifiable;

class authModel extends Authenticatable
{
     use Notifiable;
    protected $table='register';
    protected $fillable=['name','password','email'];
}
