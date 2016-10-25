<?php

namespace App\ManualAuth;

//abstact interficie implementacions

interface Guard
{
    public function check();

    public function validate(array $credentials);

    public function setUser($user);

}