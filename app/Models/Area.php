<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function courses (){
        return $this->hasOne(Course::class);
    }
}
