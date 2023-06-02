<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medcin extends Model
{
    use HasFactory;

    public function patients()
    {
        return $this->belongsToMany(Patient::class);
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function rendez_vous()
    {
        return $this->hasMany(Rendez_vous::class);
    }
}
