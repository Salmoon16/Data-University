<?php

namespace App\Models;

use App\Enums\FeeStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

        public function mahasiswa () : BelongsTo {
            return $this->belongsTo(Mahasiswa::class);
        }
        public function feegroup () : BelongsTo {
            return $this->belongsTo(FeeGroup::class);
        }
        public function academicyear () : BelongsTo {
            return $this->belongsTo(AcademicYear::class);
        }
}
