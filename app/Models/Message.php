<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'destinataire_id',
        'sujet',
        'contenu'
    ];
    public function destinataire(){
        return $this->belongsTo(User::class);
    }

}
