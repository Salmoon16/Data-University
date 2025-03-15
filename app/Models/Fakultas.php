<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Fakultas extends Model
{
    protected $fillable =
    [
        'name',
        'code',
        'logo',
        'slug'
    ];

    protected function code(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => strtoupper($value),
            set: fn(string $value) => strtoupper($value),
        );
    }
}
