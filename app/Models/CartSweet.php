<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CartSweet extends Pivot
{
    public function cart() : BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    public function sweet() : BelongsTo
    {
        return $this->belongsTo(Sweet::class);
    }
}
