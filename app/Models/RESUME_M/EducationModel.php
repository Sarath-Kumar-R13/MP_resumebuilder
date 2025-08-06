<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationModel extends Model
{
    protected $fillable=['course','institution','from_date','to_date'];
}
