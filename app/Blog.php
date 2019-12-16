<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use App\Blog;

class Blog extends Model
{
    protected $fillable = [
        'title','slug','featured_image','excerpt','status'
    ];
}


