<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;

class IfCampusIsSet
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
      if(Cookie::get('campus')) {
        return redirect()->route('feed');
      }

      $next($request);
    }
}
