<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model {

    protected $fillable = [
        'description', 'inscription_id'
    ];

    public function inscription() {
        return $this->belongsTo('App\Inscription');
    }

}
