<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Hash;
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

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Permission', 'permission_admins');
    }
}
