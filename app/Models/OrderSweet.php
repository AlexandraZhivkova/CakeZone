<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderSweet extends Pivot
{
    protected $fillable = [
        'quantity',
    ];

    protected function casts()
    {
        return [
            'quantity' => 'integer',
        ];
    }

    public function order() : BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function sweet() : BelongsTo
    {
        return $this->belongsTo(Sweet::class);
    }
}
