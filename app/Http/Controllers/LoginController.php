<?php

namespace App\Http\Controllers;

use App\ManualAuth\Guard;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    protected $guard;

    /**
     * LoginController constructor.
     * @param $guard
     */
    public function __construct(Guard $guard)
    {
        $this->guard = $guard;
    }


    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $this->validateLogin($request);
        $credentials = $request->only('email','password');
        if($this->guard->validate($credentials)) {
            $this->guard->setUser();
            return redirect('home');
        }
        return redirect('login');
    }

    private function validateLogin($request)
    {
        $this->validate($request, [
            'email' => 'email|required', 'password' => 'required',
        ]);
    }
}
