<?php
namespace Creational\abstractFactory;

use Creational\abstractFactory\Button;

class WindowsButton implements Button
{

    public function render()
    {
        return 'checkbox button in windows';
    }
}