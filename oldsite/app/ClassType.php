<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassType extends Model {

    protected $table = 'classestypes';

    public function classes() {
        return $this->hasMany('App\Classes', 'type_id');
    }

}
