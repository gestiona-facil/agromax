<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reproductor extends Model
{
    protected $tableName = 'reproductores';
    use HasFactory;

    
    public function ganados()
    {
        return $this->belongsTo(Ganado::class, );
    }
}
