<?php

namespace App\ManualAuth\UserProviders;
/**
 * Created by PhpStorm.
 * User: rogerforne
 * Date: 8/11/16
 * Time: 20:13
 */
interface UserProvider
{
    public function validate(array $credentials);

    public function getUserByCredentials(array $credentials);

    //todo: afegir reme,ber token i token ja que no el pasa l'usuari i injectar userprovider i el guard alr egister com al login.

    public function setUser($data);
    //'remember_token' => str_random(10),
//'token' => bcrypt(str_random(10)),
}