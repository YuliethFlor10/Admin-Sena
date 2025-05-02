<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function courses (){
        return $this->belongsToMany(Course::class);
    }

    public function training_centers (){
        return $this->belongsTo(Training_center::class);
    }
}
