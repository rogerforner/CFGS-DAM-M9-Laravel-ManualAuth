<?php

/**
 * Created by PhpStorm.
 * User: rogerforne
 * Date: 25/10/16
 * Time: 20:08
 */

namespace App\ManualAuth;

use Illuminate\Contracts\Auth\UserProvider;

class CookieGuard implements Guard
{
    protected $provider;

    /**
     * ManualGuard constructor.
     */
    public function __construct(UserProvider $provider)
    {
        $this->provider=$provider;
    }

    public function check(){

        return isset($_COOKIE['user']) ? true : false ;

    }

    public function validate(array $credentials)
    {
        return $this->provider->validate($credentials);
        //return true;
    }
    public function setUser($user)
    {
        // TODO: Implement setUser() method.
    }


}