<?php

namespace App\Http\Middleware;

use Closure;

class PagesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if ( ! $request->user() )

        {

            return redirect('/login');

        }
        return $next($request);
    }
}
