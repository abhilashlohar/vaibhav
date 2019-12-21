<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use App\Blog;

class EnquiryDetail extends Model
{
    protected $fillable = [
        'enquiry_id','message','user_id','admin_id'
    ];

    public function BlogCategories()
    {
        return $this->belongsTo('App\Enquiry');
    }
}
