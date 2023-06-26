<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    use HasFactory;

    protected $tableName = 'vacunas';

    public function control_sanitario(){
        return $this->belongsTo(ControlSanitarioAnimal::class);
    }
}
