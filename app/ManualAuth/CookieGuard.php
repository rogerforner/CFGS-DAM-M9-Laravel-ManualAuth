<?php

/**
 * Created by PhpStorm.
 * User: rogerforne
 * Date: 25/10/16
 * Time: 20:08
 */

namespace App\ManualAuth;

use App\ManualAuth\UserProviders\UserProvider;

class CookieGuard implements Guard
{
    protected $provider;

    /**
     * ManualGuard constructor.
     * @param $provider
     */
    public function __construct(UserProvider $provider)
    {
        $this->provider=$provider;
    }

    public function check(){

        return isset($_COOKIE['user']) ? true : false;

    }

    public function validate(array $credentials)
    {
        return $this->provider->validate($credentials);
        //return true;
    }
    public function setUser($user)
    {
        setcookie('user',$user->token);
    }


}