<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_pat',
        'prenom_pat',
        'nom_med',
        'prenom_med',
        'motif',
        'taille',
        'pois',
        'tension',
        'temperatur',
        'examen',
        'conclusion',
        'date',
        'heure '
    ];

    //une consultation n'appartient qu'à un patient
    public function Patient()
    {
        return $this->belongsTo(Patient::class);
    }

    //une consultation n'a remplir que par un seul medecin
    public function Medecin()
    {
        return $this->belongsTo(Medecin::class);
    }

    //une consultation a une certificat
    public function Certificat()
    {
        return $this->hasOne(Certificat::class);
    }

    //une consultation a plusieurs Ordonnances
    public function Ordonnance()
    {
        return $this->hasMany(Ordonnance::class);
    }

}
