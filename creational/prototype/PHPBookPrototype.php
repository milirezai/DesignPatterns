<?php

namespace Creational\prototype;

use Creational\prototype\BookPrototype;

class PHPBookPrototype extends BookPrototype
{
    public function __construct()
    {
        $this->topic = 'php book';
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}