<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
class SubCategory extends Model
{
    protected $fillable = [
        'name','category_id'
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
      ];
    }

    public static function messages($id = '') 
    {
      return [
          'name.required' => 'You must enter category name.',
          'name.unique' => 'The category name is already exists.',
      ];
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    
}
