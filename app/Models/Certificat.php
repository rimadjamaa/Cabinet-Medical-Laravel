<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_pat',
        'prenom_pat',
        'nom_med',
        'prenom_med',
        'date',
        'heure ',
        'dure'
    ];

    //une certificat n'a remplir que par un seul medecin
    public function Medecin()
    {
        return $this->belongsTo(Medecin::class);
    }

    //une certificat n'appartient qu'à un patient
    public function Patient()
    {
        return $this->belongsTo(Patient::class);
    }

     //une certificat n'appartient qu'à une consultation
     public function consultation()
     {
         return $this->belongsTo(Consultation::class);
     }

}
