<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    
    protected $fillable = ['admin_name','admin_password'];

    public $timestamps = true;

}
