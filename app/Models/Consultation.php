<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    public function medcin()
    {
        return $this->belongsTo(Medcin::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function ordenance()
    {
        return $this->hasOne(Ordenance::class);
    }

    public function certificat()
    {
        return $this->hasOne(Certificat::class);
    }
}
