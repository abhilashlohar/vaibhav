<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use App\Blog;

class Enquiry extends Model
{
    protected $fillable = [
        'subject','user_id','product_id','ticket_no','type','status'
    ];

    public function EnquiryDetails()
    {
        return $this->hasMany('App\EnquiryDetail');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
