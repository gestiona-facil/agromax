<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Madre;

class ControlLecheria extends Model
{
    use HasFactory;

    protected $tableName = 'control_lecherias';

    public function madre(){
        return $this->belongsTo(Madre::class, 'madre_id', 'id');
    }
}
