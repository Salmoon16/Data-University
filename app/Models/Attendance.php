<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    protected $fillable = [
        'course_id',
        'mahasiswa_id',
        'classroom_id',
        'status',
        'section',
    ];

    public function course(): BelongsTo {
        return $this->belongsTo(Courses::class);
    }

    public function mahasiswa(): BelongsTo {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function classroom(): BelongsTo {
        return $this->belongsTo(Classroom::class);
    }
}
