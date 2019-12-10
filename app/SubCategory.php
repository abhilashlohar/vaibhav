<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'name','image_path','category_id'
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
          'image_path' => 'required|mimes:jpeg,jpg,png|max:2048',
          'category_id' => 'required'
      ];
    }
    public static function messages($id = '') 
    {
      return [
          'name.required' => 'You must enter category name.',
          'name.unique' => 'The category name is already exists.',
          'image_path.required' => 'You must select image.',
          'category_id.required' => 'You must select category.',
      ];
    }
    public function category(){
        $this->belongsTo(Category::class);
    }
}
