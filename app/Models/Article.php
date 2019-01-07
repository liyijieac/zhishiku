<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['article_title','article_descri','article_sort','is_show','user_id','article_content'];

    public $timestamps = true;
}
