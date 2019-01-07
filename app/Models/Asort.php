<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asort extends Model
{
    protected $fillable = ['asort_name','asort_descri','is_show','user_id'];

    public $timestamps = true;
}
