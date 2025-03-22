<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Classroom extends Model
{
    protected  $fillable = [
        'fakultas_id',
        'departement_id',
        'academic_year_id',
        'name',
        'slug',
    ];

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Fakultas::class);
    }
    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }
    public function academicYear(): BelongsTo
    {
        return $this->belongsTo(AcademicYear::class);
    }
    public function mahasiswas(): HasMany
    {
        return $this->hasMany(Mahasiswa::class);
    }
    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }
    public function courses(): HasManyThrough
    {
        return $this->hasManyThrough(
            Courses::class,
            Schedule::class,
            'classroom_id',
            'id',
            'id',
            'course_id'
        );
    }
}
