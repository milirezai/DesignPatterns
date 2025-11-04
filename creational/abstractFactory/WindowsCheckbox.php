<?php
namespace Creational\abstractFactory;

use Creational\abstractFactory\Checkbox;

class WindowsCheckbox implements Checkbox
{

    public function render()
    {
        return 'checkbox style in windows';
    }
}