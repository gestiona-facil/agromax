<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Madre extends Model
{
    protected $tableName = 'madres';
    
    use HasFactory;

    public function lecherias(): hasMany
    {
        return $this->hasMany(Lecheria::class);
    }
    
    public function control_lecherias(): hasMany
    {
        return $this->hasMany(Control_Lecheria::class);
    }
    public function ganados()
    {
        return $this->belongsTo(Ganado::class, );
    }
    
}




