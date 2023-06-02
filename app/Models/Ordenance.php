<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordenance extends Model
{
    use HasFactory;
    protected $table = 'ordenance';

    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }
}
