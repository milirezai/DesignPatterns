<?php
namespace Creational\abstractFactory;

use Creational\abstractFactory\Button;

class MacOsButton implements Button
{

    public function render()
    {
        return 'button style in MacOs';
    }
}