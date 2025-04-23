<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    /** @use HasFactory<\Database\Factories\CartFactory> */
    use HasFactory;

    public function user() : HasOne
    {
        return $this->hasOne(User::class);
    }

    public function sweets() : BelongsToMany
    {
        return $this->belongsToMany(Sweet::class)->withPivot('quantity');
    }
}
