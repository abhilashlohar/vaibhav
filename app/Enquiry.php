<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use App\Blog;

class Enquiry extends Model
{
    protected $fillable = [
        'user_id','product_id','ticket_no','type','status'
    ];

    public function BlogCategories()
    {
        return $this->hasMany('App\EnquiryDetail');
    }
}
