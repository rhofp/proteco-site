<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';
    protected $primaryKey = 'curso_id';

    protected $fillable = [
        'nombre',
        'nombre_imagen',
        'nombre_temario',
        'nivel',
        'tipo',
        'num_horas',
        'precio_estudiante_unam',
        'precio_estudiante_ext',
        'precio_general',
        'fecha_inicio',
        'fecha_fin',
        'semestre_id',
        'activo'
    ];

    protected $with = ['grupos'];

    public function grupos(){
        return $this->hasMany('App\Models\Grupo','curso_id','curso_id');
    }

    public function semestre(){
        return $this->hasOne('App\Models\Semestre','semestre_id','semestre_id');
    }
}
