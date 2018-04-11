<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;

class Affiliate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $a = $request->get('a');

        if (isset($a)) {
            $minutes = 525600; // 365 dni v minutach
            $cookie = Cookie('a', $a, $minutes);
            $route = $request->route()->getName();
            return redirect()->route($route)->withCookie($cookie);
        }
        return $next($request);
    }
}
