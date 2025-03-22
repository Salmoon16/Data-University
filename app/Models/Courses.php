<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Courses extends Model
{
    protected $fillable = [
        'fakultas_id',
        'departement_id',
        'dosen_id',
        'academic_year_id',
        'code',
        'name',
        'credit',
        'semester',
    ];

    public function fakultas(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class);
    }

    public function academicyear(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function schedules(): HasMany {
        return $this->hasMany(Schedule::class);
    }

    public function attendances(): HasMany {
        return $this->hasMany(Attendance::class);
    }

    public function grades(): HasMany {
        return $this->hasMany(Grade::class);
    }
}
