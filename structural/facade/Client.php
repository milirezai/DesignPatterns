<?php

namespace Structural\facade;
require_once __DIR__.'/../../vendor/autoload.php';

class Client
{
    public static function run(string $module): bool
    {
        $serviceFacade = new ServiceFacade();

        return $serviceFacade->module($module);
    }
}


var_dump(
    Client::run('User')
);