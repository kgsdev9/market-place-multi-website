<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storekeeper extends Model
{
    use HasFactory;

    protected $fillable =[
        'sirname',
        'firstname',
        'phonenumber',
        'address_payment',
        'website',
        'seller_phonenumber',
        'kibs',
        'logo',
    ];
}
