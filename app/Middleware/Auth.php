<?php

namespace App\Middleware;

class Auth
{
	/**
	 * Verify if user is logged.
	 *
	 * @param  $request
	 * @param  $next
	 * @return mixed
	 */
    public function handle($request, $next)
    {
        if (!auth()) {
            return redirect('/login');
        }
        return $next($request);
    }
}
