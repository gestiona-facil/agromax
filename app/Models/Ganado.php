<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ganado extends Model
{
    protected $tableName = 'ganados';
    use HasFactory;

    public function controles_sanitario()
    {
        return $this->hasMany(ControlSanitarioAnimal::class, 'ganado_id');
    }

    public function engordes()
    {
        return $this->hasMany(Engorde::class);
    }

    public function madres()
    {
        return $this->hasMany(Madre::class);
    }

    public function reproductor()
    {
        return $this->hasMany(Reproductor::class);
    }

    public function crias()
    {
        return $this->hasMany(Cria::class);
    }

    public function control_sanitario_animales()
    {
        return $this->hasMany(ControlSanitarioAnimal::class);
    }


}