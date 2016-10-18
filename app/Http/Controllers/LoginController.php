<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function login()
    {
        //return view('auth.login');
        echo "login";
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
}
