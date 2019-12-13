<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use App\Category;

class Category extends Model
{
    protected $fillable = [
        'name', 'image'
    ];

    public function notHavingImageInDb(){
        return (empty($this->image))?true:false;
    }

    public static function boot()
    {
        parent::boot();
    }

    public static function rules($id = '') 
    {
      $rules =  [
          'name' => [
            'required', 
            Rule::unique('categories')->where(function ($query) {
                return $query->where('deleted', false);
            })->ignore($id)
          ],
          'image_add' => 'mimes:jpeg,jpg,png|max:2048'
      ];

      if(!empty($id))
      {
        $category = Category::find($id);
      
        if ($category->notHavingImageInDb()){
            $rules['image_add'] = 'required|mimes:jpeg,jpg,png|max:2048';
        }
      }
      else
      {
        $rules['image_add'] = 'required|mimes:jpeg,jpg,png|max:2048';
      }

      return $rules;
    }

    public static function messages($id = '') 
    {
      return [
          'name.required' => 'You must enter category name.',
          'name.unique' => 'The category name is already exists.',
          'image_add.required' => 'You must select image.',
          'image_add.mimes' => 'Only allowed image type jpeg,jpg,png.',
          'image_add.max' => 'Image size is big from 2MB.'
      ];
    }

    public function subCategories(){
        $this->hasMany('App\SubCategory');
    }
    
}
