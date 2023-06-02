<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function medcins()
    {
        return $this->belongsToMany(Medcin::class);
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
