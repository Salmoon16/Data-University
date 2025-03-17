<?php

namespace App\Models;

use App\Enums\AcademicYearSemester;
use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{

    protected $fillable = [
    'id',
    'academic_year_id',
    'university_id',
    'faculty_id',
    'name',
    'slug',
    'start_date',
    'end_date',
    'semester',
    'is_active',
    ];

    protected function casts(): array
    {
        return [
            'semester' => AcademicYearSemester::class,
        ];
    }
}
