<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    protected $fillable = [
        'user_id',
        'fakultas_id',
        'departement_id',
        'employee_number',
    ];
}
