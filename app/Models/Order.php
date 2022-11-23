<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'adresse_delivry',
        'country_delivry',
        'city_delivry',
        'phone',
        'quantity',
        'payement_status',
        'user_id',
        'amount',
        'code',
        'charge_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
     }

    public function products() {
        return $this->belongsToMany(Product::class,'orders_produtcs','order_id','product_id')
        ->withPivot('quantity','amount')
        ->withTimestamps();
     }




}
