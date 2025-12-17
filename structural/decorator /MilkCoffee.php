<?php

namespace Structural\decorator;

use Structural\decorator\CoffeeDecorator;

class MilkCoffee extends CoffeeDecorator
{
    public function getCost(): int
    {
        return $this->getCost() + 2;
    }

    public function getDescription(): string
    {
        return $this->getDescription().' with milk';
    }
}