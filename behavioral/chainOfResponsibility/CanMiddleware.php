<?php

namespace Behavioral\chainOfResponsibility;

use Behavioral\chainOfResponsibility\Middleware;
use Closure;

class CanMiddleware implements Middleware
{

    public function handle($request, Closure $next): Closure
    {
        echo 'can oki'.PHP_EOL;
        return $next($request);
    }
}