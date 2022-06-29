<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_med',
        'prenom_med',
        'photo',
        'specialite ',
        'adresse ',
        'telephone '
    ];

    //relationship_methode_heritage

    //le medecin rempli plusieurs fiche_mut
    public function FicheMut()
    {
        return $this->hasMany(FicheMut::class);
    }

     //le medecin rempli plusieurs consultations
     public function Consultation()
     {
         return $this->hasMany(Consultation::class);
     }
    
     //le medecin rempli plusieurs certificats
     public function Certificat()
     {
         return $this->hasMany(Certificat::class);
     }

     //le medecin rempli plusieurs fiches d'examen
     public function Fiche_Examen()
     {
         return $this->hasMany(Fiche_Examen::class);
     }


}
