<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class SubCategory extends Model
{
    protected $fillable = [
        'name','image','category_id'
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
            Rule::unique('sub_categories')->where(function ($query) {
                return $query->where('deleted', false);
            })->ignore($id)
          ],
          'image_add' => 'mimes:jpeg,jpg,png|max:2048',
          'category_id' => 'required'
      ];
    }
    public static function messages($id = '') 
    {
      return [
          'name.required' => 'You must enter category name.',
          'name.unique' => 'The category name is already exists.',
          'category_id.required' => 'You must select category.',
      ];
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
