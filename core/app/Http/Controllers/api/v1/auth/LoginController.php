<?php

namespace App\Http\Controllers\api\v1\auth;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        if (Auth::attempt(['email' => request('email'),
            'password' => request('password')])) {
            $user = Auth::user();
            $response = [
                'success' => true,
                'message' => 'usuario logeado con éxito',
                'data' => [
                    'user' => $user,
                    'token_type' => 'Bearer',
                    'token' =>  $user->createToken('access_token')->accessToken,
                ] ,
            ];
            return response()->json($response,200);
        } else {
            $response = [
              'success' => false,
              'message' => 'Correo o contraseña incorrectos',
              'data' => []
            ];
            return response()->json($response, 401);
        }
    }

    public function destroy(Request $request){

        $request->user()->token()->revoke();
        return response()->noContent();
    }
}
