<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche_Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_pat',
        'prenom_pat',
        'date_naiss',
        'sexe ',
        'adresse ',
        'telephone ',
        'group_sang '
    ];


     //une fiche_patient n'appartient qu'à un patient
     public function Patient()
     {
         return $this->belongsTo(Patient::class);
     }

     //une fiche_patient n'a remplie que par une seule secretaire
     public function secretaire()
     {
         return $this->belongsTo(Secretaire::class);
     } 
}
