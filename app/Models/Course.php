<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function aprendices (){
        return $this->hasOne('App\Models\Aprendice');
    }

    public function training_center (){
        return $this->belongsTo('App\Models\training_center');
    }

    public function area (){
        return $this->belongsTo(Area::class);
    }

    public function teachers (){
        return $this->belongsToMany(Teacher::class);
    }
}
