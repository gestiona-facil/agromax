<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madre extends Model
{
    protected $tableName = 'madres';
    
    use HasFactory;

    public function lecherias()
    {
        return $this->hasMany(Lecheria::class);
    }
    
    public function control_lecherias()
    {
        return $this->belongsTo(ControlLecheria::class);
    }
    public function ganados()
    {
        return $this->belongsTo(Ganado::class, );
    }
    
}




