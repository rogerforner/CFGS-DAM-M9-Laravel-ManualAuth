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
}