<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cria extends Model
{
    protected $tableName = 'crias';
    use HasFactory;

    public function ganados()
    {
        return $this->belongsTo(Ganado::class, );
    }
}
