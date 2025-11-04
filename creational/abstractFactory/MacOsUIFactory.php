<?php
namespace Creational\abstractFactory;

use Creational\abstractFactory\UIFactory;

class MacOsUIFactory implements UIFactory
{

    public function createButton(): Button
    {
        return new MacOsButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacOsCheckbox();
    }
}