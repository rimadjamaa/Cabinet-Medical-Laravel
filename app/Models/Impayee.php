<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impayee extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_pat',
        'prenom_pat',
        'tel_pat',
        'montant_APS',
        'montant_RS'
    ];

     //une impayee est d'un seul patient
     public function Patient()
     {
         return $this->belongsTo(Patient::class);
     }
 
     //une impayee est rempie par une seule secretaire
     public function secretaire()
     {
         return $this->belongsTo(Secretaire::class);
     }
}
