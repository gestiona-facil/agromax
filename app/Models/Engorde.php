<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Engorde extends Model
{
    use HasFactory;
    protected $tableName = 'engordes';
    
    public function ganado()
    {
        return $this->belongsTo(Ganado::class);
    }
}
