<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use App\SubCategory;
class SubCategory extends Model
{
    protected $fillable = [
        'name','image','category_id'
    ];

    public static function boot()
    {
        parent::boot();
    }

    public function notHavingImageInDb(){
        return (empty($this->image))?true:false;
    }

    public static function rules($id = '')
    {
      $rules =  [
          'name' => [
            'required',
            Rule::unique('sub_categories')->where(function ($query) {
                return $query->where('deleted', false);
            })->ignore($id)
          ],
          'image_add' => 'mimes:jpeg,jpg,png|max:2048',
          'category_id' => 'required'
      ];

      if(!empty($id))
      {
        $subCategory = SubCategory::find($id);

        if ($subCategory->notHavingImageInDb()){
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
          'category_id.required' => 'You must select category.',
          'image_add.required' => 'You must select image.',
          'image_add.mimes' => 'Only allowed image type jpeg,jpg,png.',
          'image_add.max' => 'Image size is big from 2MB.'
      ];
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
