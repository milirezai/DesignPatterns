<?php

namespace Creational\prototype;

use Creational\prototype\BookPrototype;

class SqlBookPrototype extends BookPrototype
{
    public function __construct()
    {
        $this->topic = 'sql book';
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}