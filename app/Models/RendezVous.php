<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_pat',
        'prenom_pat',
        'tel_pat',
        'date',
        'heure '
    ];

    //une rendez-vous n'appartient qu'à un patient
    public function Patient()
    {
        return $this->belongsTo(Patient::class);
    }
}

