<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'date',
        'tarif_cns',
        'nom_pat',
        'prenom_pat',
        
    ];

    //une facture est d'un seul patient
    public function Patient()
    {
        return $this->belongsTo(Patient::class);
    }

    //une facture est rempie par une seule secretaire
    public function secretaire()
    {
        return $this->belongsTo(Secretaire::class);
    }
}
