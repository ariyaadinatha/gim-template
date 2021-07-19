<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'imgurl',
        'created_at',
        'updated_at'
    ];

    protected $table = "posts";

    protected $primaryKey = "id";
}
