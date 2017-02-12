<?php

namespace App\Http\Controllers;

use App\ManualAuth\Guard;
use App\ManualAuth\UserProviders\UserProvider;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Dependency Injection
    protected $userProvider;
    protected $guard;

    /**
     * RegisterController constructor.
     * @param $userProvider
     * @param $guard
     */
    public function __construct(UserProvider $userProvider, Guard $guard)
    {
        $this->userProvider = $userProvider;
        $this->guard = $guard;
    }


    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validateRegister($request);
        $credentials = $request->only(['name','email','password']);
        $user = $this->userProvider->setUser($credentials);
        $this->guard->setUser($user);
        return redirect('home');
    }

    private function validateRegister($request)
    {
        $this->validate($request,[
            'name'=> 'required|max:255',
            'email' => 'email|required|max:255|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
    }
}
