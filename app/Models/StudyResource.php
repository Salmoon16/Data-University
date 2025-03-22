<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudyResource extends Model
{
    protected $fillable = [
        'mahasiswa_id',
        'academic_year_id',
        'semester',
        'gpa',
    ];

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function academicYear(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function grades(): HasMany
    {
        return $this->hasMany(StudyResourceGrade::class);
    }
}
