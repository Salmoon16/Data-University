<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
