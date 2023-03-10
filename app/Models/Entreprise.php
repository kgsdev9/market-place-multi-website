<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'description',
        'website',
        'image',
        'user_id'
    ];


  public function user(){

        return $this->belongsTo(User::class);
    }
    public function offres(){
        return $this->hasMany(Offre::class);
    }
}
