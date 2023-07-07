<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecheria extends Model
{
    use HasFactory;

    protected $tableName = 'lecherias';

    public function madres(){
        return $this->hasMany(Madre::class, 'lecheria_id', 'id');
    }
}
