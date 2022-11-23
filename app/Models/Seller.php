<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;


    protected $fillable =[
        'sirname',
        'firstname',
        'phonenumber',
        'frequence',
        'media',
        'photo',
        'cni',
        'house_piece',
        'rib',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

}
