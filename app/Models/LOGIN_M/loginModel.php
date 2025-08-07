<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
    protected $table='login_table';
    protected $fillable=['email','password'];
}
