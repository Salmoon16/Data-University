<?php

namespace App\Models;

use App\Enums\ScheduleDay;
use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{
    protected $fillable = [
        'fakultas_id',
        'departement_id',
        'course_id',
        'classroom_id',
        'academic_year_id',
        'start_time',
        'end_time',
        'day_of_week',
        'quota',
    ];

    protected function casts(): array
    {
        return [
            'day_of_week' => ScheduleDay::class,
        ];
    }

    public function fakultas(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Courses::class);
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function academicYear(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class);
    }
    public function studyPlans(): BelongsToMany
    {
        return $this->belongsToMany(StudyPlan::class, 'study_plan_schedule')->withTimestamps();
    }

}
