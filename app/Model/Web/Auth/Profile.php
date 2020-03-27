<?php

namespace App\Model\Web\Auth;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Profile extends Authenticatable
{
    use Notifiable;

    


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
}
