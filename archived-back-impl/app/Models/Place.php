<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function class() {
        return $this->hasMany('App\Classes');
    }
}
