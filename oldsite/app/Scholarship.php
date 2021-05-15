<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model {

    protected $table = 'scholarships';
    public $timestamps = false;
    protected $fillable = ['description'];

    public function inscriptions() {
        return $this->hasMany('App\Inscription');
    }

}
