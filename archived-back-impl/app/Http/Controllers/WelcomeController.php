<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {

        if(!\Session::has('cart_extras')){
            $cart_extras = [
                'total' => 0.0,
                'discount' => 0.0
            ];
            session()->put('cart_extras', $cart_extras);
        }
        

        return view('welcome')->with('classes',\App\Classes::all());
    }
}
