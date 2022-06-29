<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FicheMut extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_pat',
        'prenom_pat',
        'nom_med',
        'prenom_med',
        'date_soins',
        'code_mut ',
        'montant_total ',
        'montant_mut '
    ];

    //une fiche mutuelle n'appartient qu'à un patient
    public function Patient()
    {
        return $this->belongsTo(Patient::class);
    }

    
    //une fiche est remplie par un seul medecin
    public function medecin()
    {
        return $this->belongsTo(Medecin::class);
    }
}
