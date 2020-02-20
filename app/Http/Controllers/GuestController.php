<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function welcome(){
        /*
         * Ver en que periodo estamos (inter o semestral)
         * con base en el periodo y el semestre desplegar la
         * vista correspondiente.
       */
        return view('welcome');
    }

    public function convocatoria(){
        return view('convocatoria');
    }
}
