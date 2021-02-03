<?php

namespace App\Middleware;

use Closure;
use Isolar\Http\Request;
use Isolar\Middleware\MiddlewareInterface;
use Isolar\Middleware\AbstractMiddleware;

class ExampleMiddleware extends AbstractMiddleware implements MiddlewareInterface
{
    /**
     * Handle the request before the controller.
     * 
     * @param Request $request
     * @param Closure $next
     * 
     * @return void|string
     */
    public function handle(Request $request, Closure $next)
    {
        // Do some middleware stuff.

        $next();
    }
}