<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMessage extends Model
{
    use HasFactory;

    protected $fillable =  [
        'message',
        'email',
        'number',
        'annonceur_id',
        'repondeur_id',
        'poste_id'
    ];

    public function repondeur() {
        return $this->belongsTo(User::class, 'repondeur_id');
    }

    public function annonceur() {
        return $this->belongsTo(User::class, 'annonceur_id');
    }

    public function annonce() {
        return $this->belongsTo(Annonce::class, 'annonceur_id');
    }


}
