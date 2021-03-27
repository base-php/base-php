<?php

namespace App\Middleware;

use Closure;

class Auth
{
	/**
	 * Verify if user is logged.
	 *
	 * @param  Request $request
	 * @param  Closure $next
	 * @return Closure
	 */
    public function handle($request, Closure $next)
    {
        if (!auth()) {
            return redirect('/login');
        }
        return $next($request);
    }
}
