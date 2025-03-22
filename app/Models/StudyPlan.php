<?php

namespace App\Models;

use App\Enums\StudyPlanStatus;
use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class StudyPlan extends Model
{
    protected $fillable = [
            'mahasiswa_id',
            'academic_year_id',
            'status',
            'notes',
            'semester',
    ];

    protected function casts(): array
    {
        return [
            'status' => StudyPlanStatus::class,
        ];
    }

    public function mahasiswa () : BelongsTo {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function academicYear () : BelongsTo {
        return $this->belongsTo(AcademicYear::class);
    }

    public function schedules () : BelongsToMany {
        return $this->belongsToMany(Schedule::class, 'study_plan_schedule')->withTimestamps();
    }
}
