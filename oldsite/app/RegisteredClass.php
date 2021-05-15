<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisteredClass extends Model {

    protected $table = 'registeredclass';
    protected $fillable = [
        'inscription_id', 'class_id', 'approved',
        'attendance', 'note'
    ];

}
