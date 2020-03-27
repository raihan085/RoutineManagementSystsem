<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class adminMiddleWare
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
          if(Auth::guard('profile')->user()->Type == 'admin')
              return $next($request);
          elseif(Auth::guard('profile')->user()->Type == 'Student')
            return redirect()->route('Student');
          elseif(Auth::guard('profile')->user()->Type == 'Teacher')
              return redirect()->route('Teacher');
          elseif(Auth::guard('profile')->user()->Type == 'Staff')
              return redirect()->route('Staff');
            return redirect()->route('user.index');
        //echo $userRoles;
    }
}
