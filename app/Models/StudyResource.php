<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyResource extends Model
{
    protected $fillable = [
        'mahasiswa_id',
        'academic_year_id',
        'semester',
        'gpa',
    ];
}
