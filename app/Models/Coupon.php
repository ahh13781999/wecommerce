<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = [
        'expiry_date'
    ];

    public static function Search($query)
    {
        return empty($query) ? static::query() : static::where(function($q) use ($query){
           
            $q->where('code','LIKE','%'.$query.'%')
            ->orWhere('value','LIKE','%'.$query.'%')
            ->orWhere('cart_value','LIKE','%'.$query.'%');

        });
    }
}
