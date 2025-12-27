<?php

namespace Behavioral\chainOfResponsibility;
require_once __DIR__.'/../../vendor/autoload.php';

class Client
{
    public static function handel($request)
    {
        $middleware = new Kernel();
        return $middleware->handle($request);
    }
}

$request = ['auth' => true,'acl' => true, 'can' => true];
Client::handel($request);