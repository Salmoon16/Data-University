<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classroom extends Model
{
    protected  $fillable = [
        'fakultas_id',
        'departement_id',
        'academic_year_id',
        'name',
        'slug',
    ];

    public function fakultas () : BelongsTo {
        return $this->belongsTo(Fakultas::class);
    }
    public function departement () : BelongsTo {
        return $this->belongsTo(Departement::class);
    }
    public function academicyear () : BelongsTo {
        return $this->belongsTo(AcademicYear::class);
    }
}
