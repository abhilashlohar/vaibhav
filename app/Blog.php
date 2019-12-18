<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use App\Blog;

class Blog extends Model
{
    protected $fillable = [
        'title','slug','featured_image','excerpt','content','status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (isset($model->status) && $model->status=='on') $model->status = 'published';
            else $model->status = 'draft';
        });
    }

    public static function rules($id = '') 
    {
      $rules =  [
          'title' => 'required',
          'featured_image' => 'mimes:jpeg,jpg,png|max:2048'
      ];

      

      return $rules;
    }

    public static function messages($id = '') 
    {
      return [
          'title.required' => 'You must enter blog tite.',
          'featured_image.mimes' => 'Only allowed image type jpeg,jpg,png.',
          'featured_image.max' => 'Image size is big from 2MB.'
      ];
    }
}


