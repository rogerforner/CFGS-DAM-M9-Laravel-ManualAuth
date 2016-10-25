<?php

namespace App\Http\Middleware;

use App\ManualAuth\Guard;
use Closure;
//use ManualGuard;

//use ManualGuard;


class MyManualAuthMiddleware
{
    protected $manualGuard;

    /**
     * MyManualAuthMiddleware constructor.
     * @param $manualGuard
     */
    public function __construct( \Guard $manualGuard)
    {
        $this->manualGuard = $manualGuard;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //Pecat extrem.
        //No tornar a explicar el mètode ja que s'enten que és un guard.
        if ( $this->manualGuard->check()) {
            return $next($request);
        }
        return redirect('login');

    }
}
