<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Asistente extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    protected $table = 'asistente';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','apellido_pat','apellido_mat','tipo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function grupos(){
        return $this->belongsToMany('App\Models\Curso',
            'inscripcion_asistente',
            'grupo_id','asistente_id');
    }

    public function datosEstudiante(){
        return $this->hasOne('App\Models\AsistenteEstudiante','asistente_id','asistente_id');
    }

    public function datosNoEstudiante(){
        return $this->hasOne('App\Models\AsistenteNoEstudiante','asistente_id','asistente_id');
    }
}
