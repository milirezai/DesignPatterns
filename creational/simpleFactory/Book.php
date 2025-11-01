<?php
namespace Creational\SimpleFactory;

use Creational\SimpleFactory\Product;

class Book implements Product
{
    private $name;
    private $price;
    private $description;
    public function __construct(string $name, int $price, string $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}