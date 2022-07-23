<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function Search($query)
    {
       return empty($query) ? static::query() : static::where(function($q) use ($query){
             
        $q->where('name','LIKE','%'.$query.'%');

       });
    }
}
