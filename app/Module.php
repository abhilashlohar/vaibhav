<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Module extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function boot()
    {
        parent::boot();
    }

    public static function rules($id = '')
    {
        $rules =  [
            'name' => [
              'required',
              Rule::unique('modules')->where(function ($query) {
                  return $query->where('deleted', false);
              })->ignore($id)
            ]
        ];
        return $rules;
    }

    public static function messages($id = '')
    {
      return [
          'name.required' => 'You must enter name.',
          'name.unique' => 'The name is already exists.'
      ];
    }
}
