<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche_Examen extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_Examen',
        'resultat'
    ];

    //une fiche examen est rempli par un seul medecin
    public function Medecin()
    {
        return $this->belongsTo(Medecin::class);
    }

    //une fiche examen est d'un seul patient
    public function Patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
