<?php

namespace App\Model\Web\Auth;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
      return $this->hasMany('App\Model\Web\Auth\Profile');
    }
}
