<?php

namespace App\Middleware;

class Auth
{
	/**
	 * Verify if user is logged.
	 *
	 * @param  Request $request
	 * @param  Closure $next
	 * @return Closure|Redirect
	 */
    public function handle($request, $next)
    {
        if (!auth()) {
            return redirect('/login');
        }
        return $next($request);
    }
}
