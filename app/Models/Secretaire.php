<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_sec',
        'prenom_sec',
        'email',
        'password '
    ];

    //relationship methode_heritage


    //une secretaire rempli plusieurs depenses
    public function depense()
    {
        return $this->hasMany(Depense::class);
    }

    //une secretaire rempli plusieurs fiches patient
    public function FichePatient()
    {
        return $this->hasMany(Fiche_Patient::class);
    }

}
