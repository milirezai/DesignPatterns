<?php

namespace Behavioral\chainOfResponsibility;

use Behavioral\chainOfResponsibility\Middleware;
use Closure;

class AclMiddleware implements Middleware
{

    public function handle($request, Closure $next): Closure
    {
        echo 'acl oki'.PHP_EOL;
        return $next($request);
    }
}