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
            $url = server('uri');
            return redirect("/login?redirect=$url");
        }

        return $next($request);
    }
}
