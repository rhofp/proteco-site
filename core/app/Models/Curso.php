<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';
    protected $primaryKey = 'curso_id';

    protected $fillable = [
        'nivel',
        'activo',
        'nombre',
        'horas',
        'semestre',
        'es_semestral',
        'es_intersemestral',
        'precio_estudiante_unam',
        'precio_estudiante_ext',
        'precio_general',
        'fecha_inicio',
        'fecha_fin'
    ];

    protected $with = ['grupos'];

    public function grupos(){
        return $this->hasMany('App\Models\Grupo','curso_id','curso_id');
    }
}
