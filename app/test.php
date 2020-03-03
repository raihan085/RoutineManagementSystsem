<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{

    protected $table="tests";

    protected $fillable =[
      'FullName','Email','Password',
    ];

    protected $hidden = [
      'Password',
    ];
}
