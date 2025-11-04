<?php
namespace Creational\abstractFactory;

use Creational\abstractFactory\Checkbox;

class MacOsCheckbox implements Checkbox
{

    public function render()
    {
        return 'checkbox style in MacOs';
    }
}