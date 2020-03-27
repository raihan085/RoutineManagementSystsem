<?php

namespace App\Model\Web\Auth;

use Illuminate\Database\Eloquent\Model;

class PendingUserRequest extends Model
{
    protected $fillable = [
      'FullName',
      'RegistrationNumber',
      'Type',
      'PhoneNumber',
      'Email',
      'Password',
    ];


}
