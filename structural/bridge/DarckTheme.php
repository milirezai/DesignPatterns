<?php

namespace Structural\bridge;

use Structural\bridge\Theme;

class DarckTheme implements Theme
{

    public function getBackgroundColor(): string
    {
        return 'color black';
    }

    public function getTextColor(): string
    {
        return 'color white';
    }
}