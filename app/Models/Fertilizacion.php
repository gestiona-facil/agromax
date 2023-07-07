<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fertilizacion extends Model
{
    protected $tableName = 'fertilizacions';
    use HasFactory;

    public function siembra()
    {
        return $this->belongsTo(Siembra::class);
    }

}
