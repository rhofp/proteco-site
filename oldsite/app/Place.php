<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model {

    public function classes() {
        return $this->hasMany('App\Classes');
    }

}
