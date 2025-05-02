<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Computer extends Model
{
    public function aprendices (){
        return $this->belongsTo('App\Models\Aprendice');
    }
}
