<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Modelo que deberia llamarse Class en lugar de Classes :C

class Classes extends Model {

    protected $table = 'classes';
    protected $fillable = [
        'startDate', 'endDate', 'startTime',
        'endTime', 'days', 'maxQuota',
        'currentQuota', 'state',
        'cost1', 'cost2', 'cost3',
        'semester_id', 'course_id',
        'user_id', 'place_id', 'type_id'
    ];

    public function semester() {
        return $this->belongsTo('App\Semester');
    }

    public function course() {
        return $this->belongsTo('App\Course');
    }

    public function place() {
        return $this->belongsTo('App\Place');
    }

    public function classtype() {
        return $this->belongsTo('App\ClassType', 'type_id');
    }

    public function inscriptions() {
        return $this->belongsToMany('App\Inscription', 'registeredclass', 'class_id', 'inscription_id')->withPivot('approved', 'attendance', 'note')->withTimestamps();
    }

}
