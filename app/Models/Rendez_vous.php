<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendez_vous extends Model
{
    use HasFactory;
    protected $table = 'rendez_vous';
    
    public function medcin()
    {
        return $this->belongsTo(Medcin::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
