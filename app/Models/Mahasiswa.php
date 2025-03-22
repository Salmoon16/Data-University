<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function user () : BelongsTo {
        return $this->belongsTo(User::class);
    }
    public function fakultas () : BelongsTo {
        return $this->belongsTo(Fakultas::class);
    }
    public function departement () : BelongsTo {
        return $this->belongsTo(Departement::class);
    }
    public function classroom () : BelongsTo {
        return $this->belongsTo(Classroom::class);
    }
    public function feegroup () : BelongsTo {
        return $this->belongsTo(FeeGroup::class);
    }
}
