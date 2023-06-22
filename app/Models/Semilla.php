<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Semilla extends Model
{
    protected $tableName = 'semillas';
    use HasFactory;

    public function vegetal(): BelongsTo
    {
    return $this->belongsTo(Vegetal::class);
    }

    public function siembras(): hasMany
    {
        return $this->hasMany(Siembra::class);
    }

}
