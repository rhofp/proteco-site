<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    public function class() {
        return $this->hasMany('App\Classes');
    }
}
