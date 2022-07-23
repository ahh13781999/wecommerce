<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function OrderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    
    public function Shipping()
    {
        return $this->hasOne(Shipping::class);
    }

    public function Transaction()
    {
        return $this->hasOne(Transaction::class);
    }

    public static function Search($query)
    {
       return empty($query) ? static::query() : static::where(function($q) use ($query){
             
        $q->where('firstname','LIKE','%'.$query.'%')
        ->orWhere('lastname','LIKE','%'.$query.'%')
        ->orWhere('email','LIKE','%'.$query.'%')
        ->orWhere('line','LIKE','%'.$query.'%')
        ->orWhere('zipcode','LIKE','%'.$query.'%')
        ->orWhere('total','LIKE','%'.$query.'%');

       });
    }
}
