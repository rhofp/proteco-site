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
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('laravel_token')->accessToken;
            //After successfull authentication, notice how I return json parameters
            return response()->json([
                'success' => true,
                'token' => $success,
                'user' => $user
            ]);
        } else {
            //if authentication is unsuccessfull, notice how I return json parameters
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }
    }

    public function destroy(Request $request){

        $request->user()->token()->revoke();
        return response()->noContent();
    }
}
