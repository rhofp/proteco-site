<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public function course() {
        return $this->belongsTo('App\Course');
    }
    public function place() {
        return $this->belongsTo('App\Place');
    }
    public function semester() {
        return $this->belongsTo('App\Semester');
    }
    public function type() {
        return $this->belongsTo('App\ClassType');
    }
}
