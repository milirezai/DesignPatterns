<?php

namespace Structural\proxy;

use Structural\proxy\Subject;

class WeatherServiceProxy implements Subject
{

    private WeatherService $weatherService;
    private array $cache;

    public function __construct(string $apiKey, string $url)
    {
        $this->weatherService = new WeatherService($apiKey, $url);
        $this->cache = [];
    }

    public function request(): void
    {
        $cacheKey = $this->generateCacheKey();

        if (isset($this->cache[$cacheKey])){
            echo "retrieving data form cache";
        }

        $this->weatherService->request();

        $this->cache[$cacheKey] = true;
    }

    private function generateCacheKey(): string
    {
        return date('Y-m-d H:i');
    }
}