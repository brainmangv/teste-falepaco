<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conversion extends Model
{
    public $fillable = ['from', 'to', 'amount', 'rate'];
    use HasFactory;

    // function getToAmountAttribute($value)
    // {
    //     return date_create($value)->format('Y-m-d\TH:i:s');
    // }
    protected function toAmount(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) =>
            $attributes['amount'] * $attributes['rate']
        );
    }
}
