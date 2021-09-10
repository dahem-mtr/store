<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      

    
        // $auth->role()->can('users','red');
        if (empty($request->user()->role())) {
            return abort(401);
        }

        return $next($request);
    }
}
