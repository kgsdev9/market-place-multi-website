<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'slug',
        'country',
        'city',
        'statut',
        'description',
        'price',
        'cover_image',
        'popular',
        'tendance',
        'referencies' ,
        'quantity',
        'high_price',
        'category_id',
        'seller_id',
    ];

public function seller(){
    return $this->belongsTo(Seller::class);
}

public function category(){
    return $this->belongsTo(Category::class);
}


public function images() {
    return $this->hasMany(Image::class);
}


 public function comments(){
    return $this->hasMany(Comment::class);
}

public function wishlists(){
    return $this->hasMany(Wishlist::class);
 }


 public function oders() {
    return $this->belongsToMany(Order::class,'orders_produtcs','product_id','order_id')
    ->withPivot('quantity','amount')
    ->withTimestamps();
 }


 public function coupons(){
    return $this->hasMany(Coupon::class);
 }

}
