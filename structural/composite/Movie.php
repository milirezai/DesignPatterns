<?php

namespace Structural\composite;

use Structural\composite\Product;

class Movie implements Product
{

    public function __construct(
        private readonly string $name,
        private readonly float $price
    )
    {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}