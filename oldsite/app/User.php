<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    protected $fillable = [
        'name', 'firstLastName', 'secondLastName',
        'email', 'password', 'account',
        'newsletter', 'usertype_id', 'remember_token'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function inscriptions() {
        return $this->hasMany('App\Inscription');
    }

    public function usertype() {
        return $this->belongsTo('App\UserType');
    }

}
