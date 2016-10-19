<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //Obtenir l'email i password de l0usuari de la bd.
        try {
            $user = User::where(["email" => $request->input('email')])->firstOrFail();
        } catch (\Exception $e) {
            return redirect('login');
        }


        //Comprovació de password.
        if (Hash::check($request->input('password'), $user->password)) {
            return redirect('home');
        } else {
            return redirect('login');
        }


    }
}
