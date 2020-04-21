<?php

namespace App\Http\Controllers\api\v1\auth;

use App\Models\Asistente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:asistente'],
            'apellido_pat' => ['required'],
            'apellido_mat' => ['required'],
            'tipo' => ['required'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        return Asistente::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'apellido_pat' =>$data['apellido_pat'],
            'apellido_mat' =>$data['apellido_pat'],
            'tipo' => $data['tipo'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
