<?php

namespace Structural\dataMapper ;
require_once __DIR__ . "/../../vendor/autoload.php";

 use Structural\decorator\MilkCoffee;
 use Structural\decorator\SimpleCoffee;
 use Structural\decorator\VanillaCoffee;
 
 class Client
{
    public static function run()
    {
        $coffee = new SimpleCoffee();
        echo $coffee->getCost().PHP_EOL;
        echo $coffee->getDescription().PHP_EOL;

        $coffee = new MilkCoffee($coffee);
        echo $coffee->getCost().PHP_EOL;
        echo $coffee->getDescription().PHP_EOL;

        $coffee = new VanillaCoffee($coffee);
        echo $coffee->getCost().PHP_EOL;
        echo $coffee->getDescription().PHP_EOL;
    }

}

var_dump(
  Client::run()
);