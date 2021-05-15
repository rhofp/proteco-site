<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Registration & Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users, as well as the
      | authentication of existing users. By default, this controller uses
      | a simple trait to add these behaviors. Why don't you explore it?
      |
     */

use AuthenticatesAndRegistersUsers,
    ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'firstLastName' => 'required|max:255',
                    'secondLastName' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6|confirmed',
                    'usertype' => 'required|integer',
                    'account' => 'required|max:13|unique:users',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) {
        $names = explode(" ", $data['name']);
        $aux = "";
        foreach ($names as $name) {
            $aux .= ucfirst(strtolower($name)) . " ";
        }
        return User::create([
                    'name' => $aux,
                    'firstLastName' => ucfirst(strtolower($data['firstLastName'])),
                    'secondLastName' => ucfirst(strtolower($data['secondLastName'])),
                    'email' => strtolower($data['email']),
                    'password' => bcrypt($data['password']),
                    'account' => $data['account'],
                    'newsletter' => '1',
                    'usertype_id' => $data['usertype'],
        ]);
    }

}
