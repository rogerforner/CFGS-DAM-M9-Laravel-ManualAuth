<?php

namespace App\ManualAuth\UserProviders;


use App\User;
use Hash;

class EloquentUserProvider implements UserProvider
{

    public function validate(array $credentials)
    {
        $user= $this->getUserByCredentials($credentials);

        if(!$user) {
            return false;
        }

    //SALTS
        if ( Hash::check($credentials['password'], $user->password) ) {
            return true;
        }
            //Session::flash('errors',collect(["Login incorrecte"]));
            return false;
    }

    /**
     * @param array $credentials
     * @return bool
     */
    public function getUserByCredentials(array $credentials)
    {
        try {
            return User::where(["email" => $credentials['email']])->firstOrFail();
        } catch (\Exception $e) {
            //Session::flash('errors',collect(["Usuari no trobat a la base de dades"]));
            return false;
        }
    }

        public function setUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'remember_token' => str_random(10),
            'token' => bcrypt(str_random(10))
        ]);

    }
}