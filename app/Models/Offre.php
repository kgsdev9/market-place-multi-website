<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'statut',
        'description',
        'price',
        'entreprise_id'
    ];



    public function entreprise() {

        return $this->belongsTo(Entreprise::class);
    }

}
