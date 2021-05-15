<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model {

    protected $table = "inscriptions";
    protected $fillable = [
        'fullPayment', 'partialPayment', 'user_id',
        'state_id', 'scholarship_id'
    ];

    public function classes() {
        return $this->belongsToMany('App\Classes', 'registeredclass', 'inscription_id', 'class_id')->withPivot('approved', 'attendance', 'note')->withTimestamps();
    }

    public function inscriptionstate() {
        return $this->belongsTo('App\InscriptionState');
    }

    public function scholarship() {
        return $this->belongsTo('App\Scholarship');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function ticket() {
        return $this->hasMany('App\Ticket');
    }

}
