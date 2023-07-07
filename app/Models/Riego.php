<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riego extends Model
{
    protected $tableName = 'riegos';
    use HasFactory;

    public function siembra()
    {
    return $this->belongsTo(Siembra::class);
    }

}
