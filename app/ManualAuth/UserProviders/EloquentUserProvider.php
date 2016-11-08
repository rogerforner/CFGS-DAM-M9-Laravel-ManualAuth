<?php

namespace App\ManualAuth\UserProviders;


use App\User;
use Hash;
use Session;

class EloquentUserProvider implements UserProvider
{

    public function validate(array $credentials)
    {
        $user= $this->getUserByCredentials($credentials);


    //SALTS
        if ( Hash::check($credentials['password'], $user->password) ) {
            return true;
        }
            Session::flash('errors',collect(["Login incorrecte"]));
            return false;
    }

    public function getUserByCredentials(array $credentials)
    {
        try {
        User::where(
            ["email" => $credentials['email']])->firstOrFail();
        } catch (\Exception $e) {
            Session::flash('errors',collect(["Usuari no trobat a la base de dades"]));
            return false;
        }
    }
}