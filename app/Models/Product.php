<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getPriceAttribute()
    {
        $location = request()->session()->get('location');
        if ($location == 'india') {
            return $this->price_inr;
        } else {
            return $this->price_usd;

        }
    }
    public function getCurrencyAttribute(): string
    {
        $location = request()->session()->get('location');
        if ($location == 'india') {
            return 'INR';
        } else {
            return 'USD';

        }
    }
}
