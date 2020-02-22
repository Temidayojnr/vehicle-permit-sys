<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class IsSupervisor
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
        if (Auth::check() && Auth::user()->IsSupervisor == 1) {
            return $next($request);
        }
        return redirect('/');
    }
}
