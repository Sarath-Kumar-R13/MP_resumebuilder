<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInfoModel extends Model
{
    protected $fillable=['name','job_title','description','email','phone','location','github','image'];
}
