<?php

namespace Structural\proxy;

use Structural\proxy\Subject;

class WeatherService implements Subject
{

    public function __construct(
        protected string $apiKey,
        protected  string $url
    ){}

    public function request(): void
    {
        echo 'api-key = '. $this->apiKey.' url = '.$this->url;
    }
}