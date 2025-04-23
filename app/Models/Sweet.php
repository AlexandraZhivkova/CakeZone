<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sweet extends Model
{
    /** @use HasFactory<\Database\Factories\SweetFactory> */
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'name',
        'description',
        'category',
        'price',
        'stock'
    ];

    protected function casts()
    {
        return [
            'price' => 'decimal:2',
            'stock' => 'integer',
        ];
    }

    public function carts(): BelongsToMany
    {
        return $this->belongsToMany(Cart::class)->withPivot('quantity')->withTimestamps();
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity')->withTimestamps();
    }
}
