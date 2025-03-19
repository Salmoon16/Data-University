<?php

namespace App\Models;

use App\Enums\FeeStatus;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = [
        'fee_code',
        'mahasiswa_id',
        'fee_group_id',
        'academic_year_id',
        'semester',
        'status',
        ];

}
