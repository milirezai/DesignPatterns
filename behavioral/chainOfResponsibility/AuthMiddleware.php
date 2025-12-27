<?php

namespace Behavioral\chainOfResponsibility;

use Behavioral\chainOfResponsibility\Middleware;
use Closure;

class AuthMiddleware implements Middleware
{

    public function handle($request, Closure $next): Closure
    {
        echo 'auth oki'.PHP_EOL;
        return $next($request);
    }
}