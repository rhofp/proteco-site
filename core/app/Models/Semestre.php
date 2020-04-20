<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $table = 'semestre';
    protected $primaryKey = 'semestre_id';

    protected $fillable = ['annio','semestre'];
}
