<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

    public function classes() {
        return $this->hasMany('App\Classes');
    }

}
