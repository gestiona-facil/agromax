<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madre extends Model
{
    protected $tableName = 'madres';
    
    use HasFactory;

    public function lecheria()
    {
        return $this->belongsTo(Lecheria::class);
    }
    
    public function controles_lecheria()
    {
        return $this->hasMany(ControlLecheria::class, 'madre_id');
    }
    
    public function ganado()
    {
        return $this->belongsTo(Ganado::class);
    }
    
}




