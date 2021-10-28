<?php

namespace App\Middleware;

class Permission
{
    /**
     * Verify if user can access module.
     *
     * @param  Request $request
     * @param  Closure $next
     * @return Closure
     */
    public function handle($request, Closure $next)
    {
        if (permission()) {
            return view('401');
        }
        
        return $next($request);
    }
}
