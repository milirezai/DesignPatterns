<?php

namespace Structural\bridge;

use Structural\bridge\Theme;

class LightTheme implements Theme
{

    public function getBackgroundColor(): string
    {
        return 'color white';
    }

    public function getTextColor(): string
    {
        return 'color black';
    }
}