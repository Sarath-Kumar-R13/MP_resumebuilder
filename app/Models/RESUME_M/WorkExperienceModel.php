<?php

namespace App\Models\RESUME_M;

use Illuminate\Database\Eloquent\Model;

class WorkExperienceModel extends Model
{
    protected $fillable=['position','company','from_date','to_date','work_location'];
}
