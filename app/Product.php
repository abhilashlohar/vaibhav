<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Product extends Model
{
    protected $guarded = [
        'id', 'product_image', 'product_image_delete', 'product_image_delete'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (isset($model->is_published) && $model->is_published=='on') $model->is_published = 1;
            else $model->is_published = 0;
        });
    }

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
        $rules =  [
            'name' => [
                'required',
                Rule::unique('products')->where(function ($query) {
                    return $query->where('deleted', false);
                })->ignore($id)
            ],
            'product_code' => [
                'required',
                Rule::unique('products')->where(function ($query) {
                    return $query->where('deleted', false);
                })->ignore($id)
            ],
            'slug' => [
                'required',
                Rule::unique('products')->where(function ($query) {
                    return $query->where('deleted', false);
                })->ignore($id)
            ],
            'discount' => 'numeric',
            'sequence' => 'numeric',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'short_description' => 'required',
            // 'sku' => 'required',
            // 'product_tags' => 'required',
            'stock_quantity' => 'required|numeric',
            'regular_price' => 'required|numeric',
            'sale_price' => 'required|numeric'
        ];
      }

      return $rules;
    }

    public static function messages($id = '')
    {
      return [
          'name.required' => 'You must enter product name.',
          'name.unique' => 'The product name is already exists.',
          'category_id.required' => 'You must select category.',
          'sub_category_id.required' => 'You must select sub-category.',
          'short_description.required' => 'You must enter short description.',
          'sku.required' => 'You must enter sku.',
          'product_tags.required' => 'You must enter product tags.',
          'stock_quantity.required' => 'You must enter stock quantity.',
          'regular_price.required' => 'You must enter regular price.',
          'sale_price.required' => 'You must enter sale price.',
          'product_code.required' => 'You must enter product code.',
          'product_code.unique' => 'The product code is already exists.',
          'slug.required' => 'You must enter slug.',
          'slug.unique' => 'The slug is already exists.',
          'sequence.required' => 'You must enter sequence.',
          'sequence.numeric' => 'You must enter numeric value.',
          'discount.numeric' => 'You must enter numeric value.',
      ];
    }

    public function productImages(){
        return $this->hasMany('App\ProductImage');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function subCategory(){
        return $this->belongsTo('App\SubCategory');
    }
    public function product_image_primary(){
        return $this->hasOne('App\ProductImage')->where('product_images.is_primary', '=', 1);
    }

}
