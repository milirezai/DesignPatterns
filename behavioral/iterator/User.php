<?php

namespace Behavioral\iterator;

class User
{
    public function __construct(
        protected readonly string $name,
        protected readonly int $age
    ){}

    public function getName(): string
    {
        return $this->name;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function getInfo(): string
    {
        return 'user.name => '.$this->getName().' user.age => '.$this->getAge();
    }
}