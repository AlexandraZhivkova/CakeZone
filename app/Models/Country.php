<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory;

    public function addresses() : HasMany
    {
        return $this->hasMany(Address::class);
    }

    public function phones() : HasMany
    {
        return $this->hasMany(Phone::class);
    }
}
