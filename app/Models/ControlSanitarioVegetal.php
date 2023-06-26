<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlSanitarioVegetal extends Model
{
    use HasFactory;
    
    protected $tableName = 'control_sanitario_vegetales';

    public function siembras()
    {
    return $this->belongsTo(Siembra::class);
    }

}
