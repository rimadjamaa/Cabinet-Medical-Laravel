<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_pat',
        'prenom_pat',
        'date_naiss',
        'sexe',
        'adresse',
        'telephone '
    ];

    //relationship methode heritage
    
    
    //un patient a une fiche_patient
    public function fiche__patient()
    {
        return $this->hasOne(Fiche_Patient::class);
    }

    //un patient a une rendez-vous
    public function rendezVous()
    {
        return $this->hasOne(RendezVous::class);
    }

    //un patient a une certificat
    public function certificat()
    {
        return $this->hasOne(Certificat::class);
    }
    
    //un patient a une consultation
    public function consultation()
    {
        return $this->hasMany(Consultation::class);
    }

    //un patient a une fiche mutuelle
    public function ficheMut()
    {
        return $this->hasOne(FicheMut::class);
    }

    //un patient a plusieurs factures
    public function Facture()
    {
        return $this->hasMany(Facture::class);
    }

    //un patient a plusieurs impayees
    public function Impayee()
    {
        return $this->hasMany(Impayee::class);
    }

    //un patient a plusieurs fiches d'examen
    public function Fiche_Examen()
    {
        return $this->hasMany(Fiche_Examen::class);
    }
}
