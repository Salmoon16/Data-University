<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'user_id',
        'fakultas_id',
        'departement_id',
        'classroom_id',
        'fee_group_id',
        'mahasiswa_number',
        'semester',
        'batch',
    ];
}
