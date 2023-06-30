<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cria extends Model
{
    use HasFactory;
    
    protected $tableName = 'crias';

    public function ganado()
    {
        return $this->belongsTo(Ganado::class);
    }
}
