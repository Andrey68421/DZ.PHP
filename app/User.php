<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $timestamps = flase;
    public $fillabel=
    [
        "name",
        "second_name",
        "login",
        "password",
    ];

    public $hidden=
    [
        "password",
        "api_token",
    ];

}
