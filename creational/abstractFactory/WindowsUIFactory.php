<?php
namespace Creational\abstractFactory;

use Creational\abstractFactory\UIFactory;

class WindowsUIFactory implements UIFactory
{

    public function createButton(): Button
    {
        return new WindowsButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new WindowsCheckbox();
    }
}