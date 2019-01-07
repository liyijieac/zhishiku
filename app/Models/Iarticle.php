<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Iarticle extends Model
{
    protected $fillable = ['iarticle_title','iarticle_descri','iarticle_sort','is_show','iarticle_content','user_id'];

    public $timestamps = true;
}
