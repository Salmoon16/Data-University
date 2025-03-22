<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function departements () : HasMany {
        return $this->hasMany(Departement::class);
    }
    public function mahasiswas () : HasMany {
        return $this->hasMany(Mahasiswa::class);
    }
}
