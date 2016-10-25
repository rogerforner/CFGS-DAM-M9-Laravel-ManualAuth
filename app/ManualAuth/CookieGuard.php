<?php

/**
 * Created by PhpStorm.
 * User: rogerforne
 * Date: 25/10/16
 * Time: 20:08
 */

namespace \App\ManualAuth;

class CookieGuard implements Guard
{

    /**
     * ManualGuard constructor.
     */
    public function __construct()
    {
    }

    public function check(){

        return isset($_COOKIE['user']) ? true : false ;

    }
}