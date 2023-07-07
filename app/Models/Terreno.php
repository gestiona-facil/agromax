<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terreno extends Model
{
    protected $tableName = 'terrenos';
    use HasFactory;

    public function siembra()
    {
        return $this->hasOne(Siembra::class);
    }

}

