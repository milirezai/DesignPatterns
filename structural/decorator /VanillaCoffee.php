<?php

namespace Structural\decorator;

use Structural\decorator\CoffeeDecorator;

class VanillaCoffee extends CoffeeDecorator
{
    public function getCost(): int
    {
        return $this->getCost() + 6;
    }

    public function getDescription(): string
    {
        return $this->getDescription().' with vanilla';
    }
}