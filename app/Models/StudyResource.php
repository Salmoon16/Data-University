<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyResource extends Model
{
    protected $fillable = [
        'mahasiswa_id',
        'academic_year_id',
        'semester',
        'gpa',
    ];

    public function mahasiswa () : BelongsTo {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function academicyear () : BelongsTo {
        return $this->belongsTo(AcademicYear::class);
    }
}
