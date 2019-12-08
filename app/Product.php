<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category_id', 'sub_category_id', 'description', 'image_path'
    ];

    public static function boot()
    {
        parent::boot();
    }
    public static function rules($id = '')
    {
      return [
          'name' => [
            'required',
          ],
          'category_id' => [
            'required',
          ],
          'sub_category_id' => [
            'required',
          ],
          'image' => 'mimes:jpeg,jpg,png|max:2048',
      ];
    }
    public static function messages($id = '')
    {
      return [
          'name.required' => 'You must enter product name.',
          'category_id.required' => 'You must select category.',
          'sub_category_id.required' => 'You must select sub category.',
          'image.required' => 'You must select image.',
      ];
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function subCategory(){
        return $this->belongsTo('App\SubCategory');
    }
}
