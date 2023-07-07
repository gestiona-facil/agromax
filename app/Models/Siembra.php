<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function semilla(){
        return $this->belongsTo(Semilla::class, 'semilla_id');
    }

    public function terreno()
    {
        return $this->belongsTo(Terreno::class);
    }

    public function controlSanitarioVegetales(): hasMany
    {
        return $this->hasMany(ControlSanitarioVegetal::class);
    }

    


}
