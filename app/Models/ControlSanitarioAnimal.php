<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlSanitarioAnimal extends Model
{
    use HasFactory;

    protected $tableName = 'control_sanitario_animals';

    public function vacunas()
    {
        return $this->hasMany(Vacuna::class, 'vacuna_id');
    }

    public function ganado()
    {
        return $this->belongsTo(Ganado::class, 'ganado_id');
    }
    
}

