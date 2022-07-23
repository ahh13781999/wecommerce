<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function Search($query)
    {
       return empty($query) ? static::query() : static::where(function($q) use ($query){
             
        $q->where('name','LIKE','%'.$query.'%')
        ->orWhere('email','LIKE','%'.$query.'%')
        ->orWhere('comment','LIKE','%'.$query.'%');

       });
    }

}
