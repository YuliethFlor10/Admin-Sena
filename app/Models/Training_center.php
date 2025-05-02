<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training_center extends Model
{
    public function courses (){
        return $this->hasOne(Course::class);
    }

    public function teachers (){
        return $this->hasOne(Teacher::class);
    }
}
