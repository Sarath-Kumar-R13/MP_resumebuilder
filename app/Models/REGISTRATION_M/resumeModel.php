<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class resumeModel extends Model
{
    protected $table='resume_models';
    protected $fillable=['name','email','phone','password'];
    
}
