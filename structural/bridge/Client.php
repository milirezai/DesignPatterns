<?php

namespace Structural\bridge;
require_once __DIR__."/../../vendor/autoload.php";

class Client
{
    public static function run($page ,$theme):void
    {
        $page = new $page(new $theme);
        echo $page->getContent();
    }
}
Client::run( page: HomePage::class, theme: new LightTheme);