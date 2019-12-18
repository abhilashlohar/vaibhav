<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Product extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    public static function rules($id = '')
    {
      $rules =  [
          'name' => [
            'required',
            Rule::unique('products')->where(function ($query) {
                return $query->where('deleted', false);
            })->ignore($id)
          ]
      ];

      if(!empty($id))
      {

      }

      return $rules;
    }

    public static function messages($id = '')
    {
      return [
          'name.required' => 'You must enter blog-category name.',
          'name.unique' => 'The blog-category name is already exists.',
      ];
    }

    public function productImages(){
        $this->hasMany('App\ProductImage');
    }
}
