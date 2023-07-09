<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reproductor extends Model
{
    use HasFactory;
    
    protected $tableName = 'reproductors';
    
    public function ganado()
    {
        return $this->belongsTo(Ganado::class, 'ganado_id');
    }
}
