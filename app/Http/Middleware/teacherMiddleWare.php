<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class teacherMiddleWare
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
      if(Auth::guard('profile')->user()->Type == 'Teacher')
        return $next($request);
      elseif(Auth::guard('profile')->user()->Type == 'Student')
        return redirect()->route('Student');
      elseif(Auth::guard('profile')->user()->Type == 'admin')
          return redirect()->route('admin');
        elseif(Auth::guard('profile')->user()->Type == 'Staff')
          return redirect()->route('Staff');
          elseif(Auth::grard('pending')->check())
              return redirect()->route('user.index.request');
          return redirect()->route('user.index');
    }
}
