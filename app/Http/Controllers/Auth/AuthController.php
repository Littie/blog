<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
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

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

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
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
//        dd($data);

        $messages = [
            'reg_email.required' => 'We need to know your email address',
            'reg_email.email' => 'Enter correct email address format',
            'reg_email.max' => 'Email must contain max :max characters',
            'reg_email.unique' => 'Sorry, this email is busy',

            'reg_password.required' => 'We need to know your password',
            'reg_password.min' => 'Password must contain min :min characters',
            'reg_password.confirmed' => 'Password confirmation do not match',
        ];

        return Validator::make($data, [
            'name' => 'required|max:255',
            'reg_email' => 'required|email|max:255|unique:users,email',
            'reg_password' => 'required|min:6|confirmed',
            'reg_password_confirmation' => 'required|min:6|same:reg_password',
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['reg_email'],
            'password' => bcrypt($data['reg_password']),
        ]);
    }
}