<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Admin extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password',
    ];

    public static function rules($id = '') 
    {
      return [
          'name' => 'required',
          'email' => [
            'required', 
            Rule::unique('admins')->ignore($id)
          ]
      ];
    }
}
