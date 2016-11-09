<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $userprovider;

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validateRegister($request);
        $credentials = $request->only(['name','email','password']);
        $this->userprovider->createUser($credentials);
    }

    private function validateRegister($request)
    {
        $this->validate($request,[
            'nom'=> 'required|max:255',
            'email' => 'email|required|max:255|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
    }
}
