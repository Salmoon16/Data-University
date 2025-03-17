<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = [
        'user_id',
        'fakultas_id',
        'departement_id',
        'dosen_number',
        'academic_title',
    ];
}
