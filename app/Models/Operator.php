<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Operator extends Model
{
    protected $fillable = [
        'user_id',
        'fakultas_id',
        'departement_id',
        'employee_number',
    ];

    public function user () : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function fakultas () : BelongsTo {
        return $this->belongsTo(Fakultas::class);
    }

    public function departement () : BelongsTo {
        return $this->belongsTo(Departement::class);
    }
}
