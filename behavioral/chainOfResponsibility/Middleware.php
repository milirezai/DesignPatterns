<?php

namespace Behavioral\chainOfResponsibility;
use Closure;
interface Middleware
{
    public function handle($request, Closure $next): Closure;
}