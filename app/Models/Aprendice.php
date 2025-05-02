<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprendice extends Model
{
    public function computer (){
        return $this->hasOne('App\Models\Computer');
    }

    public function courses (){
        return $this->belongsTo('App\Models\Course');
    }
}
