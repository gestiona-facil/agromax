<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Control_Sanitario_Animal extends Model
{
    protected $tableName = 'control_sanitario_animales';

    use HasFactory;

    public function vacunas(): hasMany
    {
        return $this->hasMany(Vacuna::class);
    }

    public function ganados()
    {
        return $this->belongsTo(Ganado::class, );
    }
    
}

