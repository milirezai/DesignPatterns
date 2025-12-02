<?php

namespace Structural\bridge;

use Structural\bridge\WebPage;

abstract class AbstractWebPage implements WebPage
{

    public function __construct(protected Theme $theme)
    {}

    public function getBackgroundColor():string
    {
        return $this->theme->getBackgroundColor();
    }
    public function getTextColor():string
    {
        return $this->theme->getTextColor();
    }
    abstract public function getContent(): string;

}