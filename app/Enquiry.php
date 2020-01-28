<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use App\Blog;

class Enquiry extends Model
{

    protected $guarded = [
        'id'
    ];


    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
