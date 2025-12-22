<?php

namespace Structural\facade;

class ServiceFacade
{
    protected FinderService $finderService;
    protected PathService $pathService;
    public function __construct()
    {
        $this->pathService = new PathService();
        $this->finderService = new FinderService();
    }

    public function module(string $module): bool
    {
        $path = $this->pathService->path($module);

        if ($this->finderService->find($path))
            return true;
        else
            return false;
    }
}