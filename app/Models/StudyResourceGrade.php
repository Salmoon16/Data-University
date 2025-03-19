<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyResourceGrade extends Model
{
    protected $fillable = [
        'study_resource_id',
        'course_id',
        'letter',
        'weight_of_value',
        'grade',
    ];
}
