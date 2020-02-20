<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = 'lugar';
    protected $primaryKey = 'lugar_id';

    public function grupos(){
        return $this->hasMany('App\Models\Grupos','grupo_id','grupo_id');
    }
}
