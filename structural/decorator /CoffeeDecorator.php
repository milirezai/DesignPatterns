<?php

namespace Structural\decorator;

use Structural\decorator\Coffee;

class CoffeeDecorator implements Coffee
{

    public function __construct(
        protected readonly Coffee $coffee
    ){}

    public function getCost(): int
    {
        return $this->coffee->getCost();
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription();
    }
}