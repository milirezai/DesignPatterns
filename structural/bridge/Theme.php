<?php

namespace Structural\bridge;

interface Theme
{
    public function getBackgroundColor(): string;

    public function getTextColor(): string;
}