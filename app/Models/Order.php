<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;



    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function sweets() : BelongsToMany
    {
        return $this->belongsToMany(Sweet::class)->withPivot('quantity')->withTimestamps();
    }
}
