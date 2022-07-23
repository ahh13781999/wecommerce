<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }

    public function images()
    {
        return $this->hasMany(MultiImage::class);
    }

    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class); 
    }

    public static function Search($query)
    {
       return empty($query) ? static::query() : static::where(function($q) use ($query){
             
        $q->where('name','LIKE','%'.$query.'%')
        ->orWhere('slug','LIKE','%'.$query.'%')
        ->orWhere('regular_price','LIKE','%'.$query.'%');

       });
    }

    public static function SearchProduct($query)
    {
       return empty($query) ? static::whereNull('name') : static::where(function($q) use ($query){
             
        $q->where('name','LIKE','%'.$query.'%')
        ->orWhere('slug','LIKE','%'.$query.'%')
        ->orWhere('regular_price','LIKE','%'.$query.'%');

       });
    }

    public function Reviews()
    {
        return $this->hasMany(Review::class);
    }
}
