<?php

namespace Behavioral\chainOfResponsibility;

class Kernel
{
    protected array $middlewares = [
      AuthMiddleware::class,
      AclMiddleware::class,
      CanMiddleware::class
    ];

    public function handle($request)
    {
        $pipeline = array_reduce($this->middlewares, function ($next, $middleware)  use ($request){
            return function ($request) use ($next, $middleware) {
                return (new $middleware)->handle($request, $next);
            };
        }, function ($request) {
            return 'Not Found'. 404;
        });

        return $pipeline($request);
    }
}