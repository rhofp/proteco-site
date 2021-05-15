<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model {

    protected $table = 'userstypes';
    public $timestamps = false;
    protected $fillable = ['description'];

    public function users() {
        return $this->hasMany('App\User');
    }

}
