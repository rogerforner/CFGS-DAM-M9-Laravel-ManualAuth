<?php

namespace App\ManualAuth;

//abstact interficie implementacions

interface Guard
{
    public function check();
//El login controller s'encarrega de fer-ho.
    public function validate(array $credentials);

    public function setUser($user);

}