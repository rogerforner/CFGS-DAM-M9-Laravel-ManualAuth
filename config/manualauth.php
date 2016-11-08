<?php

//Fitxer de configuració per la nostra manualAuth.
return [
    'guard' => \App\ManualAuth\CookieGuard::class,
    'user' => \App\ManualAuth\UserProviders\EloquentUserProvider::class,
];
