<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['username','password','mobile','code'];

    public $timestamps = true;
}
