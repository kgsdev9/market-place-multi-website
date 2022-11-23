<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'kilo',
        'price',
        'country_start',
        'city_start',
        'country_destination',
        'city_destination',
        'start_date',
        'description',
        'image',
        'user_id',
];

public function user() {
    return $this->belongsTo(User::class);
}







}
