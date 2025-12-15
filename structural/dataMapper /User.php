<?php

namespace Structural\dataMapper;

class User
{
    public function __construct(
        protected readonly string $name,
        protected readonly string $email,
        protected readonly ?int $id
    ){}

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }
}