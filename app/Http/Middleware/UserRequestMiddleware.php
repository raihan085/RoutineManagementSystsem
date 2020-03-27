<?php

namespace App\Http\Middleware;

use Closure;

class UserRequestMiddleware
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
        if(Auth::guard('pending')->check())
          return $next($request);
        return redirect()->route('user.login');
    }
}
