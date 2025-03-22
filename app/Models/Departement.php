<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Departement extends Model
{
    protected $fillable = [
        'fakultas_id',
        'name',
        'code',
        'slug',
    ];

    public function code(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => strtoupper($value),
            set: fn(string $value) => strtolower($value),
        );
    }

    public function faculty () : BelongsTo {
        return $this->belongsTo(Fakultas::class);
    }
}
