<?php

namespace App\Middleware;

use Closure;
use Redirect;

class Auth
{
	/**
	 * Verify if user is logged.
	 *
	 * @param  Request $request
	 * @param  Closure $next
	 * @return Closure|Redirect
	 */
    public function handle($request, Closure $next)
    {
        if (!auth()) {
            return redirect('/login');
        }
        return $next($request);
    }
}
