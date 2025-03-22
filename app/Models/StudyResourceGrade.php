<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyResourceGrade extends Model
{
    protected $fillable = [
        'study_resource_id',
        'course_id',
        'letter',
        'weight_of_value',
        'grade',
    ];

    public function studyResource () : BelongsTo {
        return $this->belongsTo(StudyResource::class);
    }

    public function course () : BelongsTo {
        return $this->belongsTo(Courses::class);
    }
}
