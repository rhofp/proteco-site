<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscriptionState extends Model {
    
    protected $table = 'inscriptionsstates';
    public $timestamps = false;
    protected $fillable = ['description'];

    public function inscriptions() {
        return $this->hasMany('App\Inscription');
    }

}
