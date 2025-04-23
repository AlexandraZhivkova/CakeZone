<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    /** @use HasFactory<\Database\Factories\AddressFactory> */
    use HasFactory;

    protected $fillable = [
        'state',
        'city',
        'street',
        'number',
        'postal_code'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function country() : BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function orders() : HasMany
    {
        return $this->hasMany(Order::class);
    }
}
