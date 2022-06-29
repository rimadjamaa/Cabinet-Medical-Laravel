<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_pat',
        'prenom_pat',
        'nom_med',
        'prenom_med',
        'date',
        'description'
    ];

    //une ordonnance appartient a une consultation
    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }

}
