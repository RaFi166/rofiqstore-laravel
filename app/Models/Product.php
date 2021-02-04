<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'price_range_id', 'product_name','price','expiry_date',
    ];

    public function relationBetweenPriceRangeCat(){
        return $this-> hasOne(PriceCat::class,'id','price_range_id');
    }
}
