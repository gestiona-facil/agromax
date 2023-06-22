<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Terreno extends Model
{
    protected $tableName = 'terrenos';
    use HasFactory;

    public function siembras(): BelongsTo
    {
    return $this->belongsTo(Siembra::class);
    }

}

