<?php

namespace Structural\decorator;

use Structural\decorator\Coffee;

class SimpleCoffee implements Coffee
{

    public function getCost(): int
    {
        return 19;
    }

    public function getDescription(): string
    {
        return "this is a description for simple coffee";
    }
}