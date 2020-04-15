<?php

namespace App\Http\Controllers\api\v1\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $request->request->add([
            'grant_type' => 'password',
            'client_id' => 2,
            'client_secret' => 'JyqYZkHNwrygJHGdO6DBBPT5LLB3KH5kEAJKU2YZ',
            'username' => $request->username,
            'password' => $request->password,
        ]);

        $requestToken = Request::create(env('APP_URL') . '/oauth/token', 'post');
        $response = Route::dispatch($requestToken);

        return $response;
    }

    public function destroy(Request $request){

        $request->user()->token()->revoke();
        return response()->noContent();
    }
}
