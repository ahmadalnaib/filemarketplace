<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'slug',
        'price',
        'live'

    ];

    protected function price():Attribute
    {
        return Attribute::make(
           set:fn(float $price)=>$price *100,
        )->withoutObjectCaching();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
