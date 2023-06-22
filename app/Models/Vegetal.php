<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vegetal extends Model
{
    protected $tableName = 'vegetales';
    use HasFactory;

    public function semilla(): hasMany
    {
        return $this->hasMany(Siembra::class);
    }
}
