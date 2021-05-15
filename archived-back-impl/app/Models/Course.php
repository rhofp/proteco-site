<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function class() {
        return $this->hasMany('App\Classes');
    }
}
