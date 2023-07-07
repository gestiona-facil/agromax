<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cosecha extends Model
{
    use HasFactory;
    
    protected $tableName = 'cosechas';

    public function siembra()
    {
        return $this->belongsTo(Siembra::class);
    }

}
