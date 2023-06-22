<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siembra extends Model
{
    protected $tableName = 'siembras';
    use HasFactory;

    public function cosecha(): hasMany
    {
        return $this->hasMany(Cosecha::class);
    }

    public function fertilizaciones(): hasMany
    {
        return $this->hasMany(Fertilizacion::class);
    }

    public function riegos(): hasMany
    {
        return $this->hasMany(Riego::class);
    }

    
    public function terrenos(): hasMany
    {
        return $this->hasMany(Terreno::class);
    }

    public function controlSanitarioVegetales(): hasMany
    {
        return $this->hasMany(ControlSanitarioVegetal::class);
    }

    


}
