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
    	$url = server('REQUEST_URI') ? server('REQUEST_URI') : server('PATH_INFO');

        if (!auth()) {
            return redirect("/login?redirect=$url");
        }

        return $next($request);
    }
}
