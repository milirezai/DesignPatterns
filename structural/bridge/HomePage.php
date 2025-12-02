<?php

namespace Structural\bridge;

use Structural\bridge\AbstractWebPage;

class HomePage extends AbstractWebPage
{

    public function getContent(): string
    {
       return 'BackgroundColor fro HomePage  '.$this->getBackgroundColor().'  TextColor  ro HomePage'.$this->getTextColor();
    }
}