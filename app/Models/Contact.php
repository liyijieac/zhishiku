<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['user_id','you_email','you_theme','you_want','user_id'];

    public $timestamps = true;
}
