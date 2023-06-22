<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Control_Sanitario_Vegetal extends Model
{
    protected $tableName = 'control_sanitario_vegetales';
    use HasFactory;

    public function siembras(): BelongsTo
    {
    return $this->belongsTo(Siembra::class);
    }

}
