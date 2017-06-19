<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'telephone', 'password'];

    protected $hidden = ['password', 'remember_token'];
}
