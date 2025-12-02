<?php

namespace Structural\bridge;

use Structural\bridge\AbstractWebPage;

class AboutPage extends AbstractWebPage
{

    public function getContent(): string
    {
       return 'BackgroundColor  fro AboutPage '.$this->getBackgroundColor().'  TextColor fro AboutPage'.$this->getTextColor();
    }
}