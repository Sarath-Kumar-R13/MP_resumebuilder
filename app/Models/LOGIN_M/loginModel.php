<?php

namespace App\Models\LOGIN_M;

use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
    protected $table='login_table';
    protected $fillable=['email','password'];
}
