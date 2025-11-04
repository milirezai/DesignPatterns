<?php

namespace Creational\abstractFactory;

interface UIFactory
{
    public function createButton():Button;
    public function createCheckbox():Checkbox;
}