<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
