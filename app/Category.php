<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Category extends Model
{
	protected $fillable = [
        'name', 'image'
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
            Rule::unique('categories')->where(function ($query) {
                return $query->where('deleted', false);
            })->ignore($id)
          ],
          'image_add' => 'mimes:jpeg,jpg,png|max:2048'
      ];
    }

    public static function messages($id = '') 
    {
      return [
          'name.required' => 'You must enter category name.',
          'name.unique' => 'The category name is already exists.'
      ];
    }

    public function subCategories(){
        $this->hasMany(SubCategory::class);
    }
    
}
