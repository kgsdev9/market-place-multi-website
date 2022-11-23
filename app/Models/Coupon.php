<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'coupon',
        'price',
        'used'
    ];



    public function product(){

        return $this->belongsTo(Product::class);
    }
}
