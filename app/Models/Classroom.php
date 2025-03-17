<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected  $fillable = [
        'fakultas_id',
        'departement_id',
        'academic_year_id',
        'name',
        'slug',
    ];
}
