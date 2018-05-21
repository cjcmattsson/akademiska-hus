<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfUserSelectedCampus
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
      if(!$request->cookie('campus'))
      {
        return redirect()->route('select.campus');
      }
        return $next($request);
    }
}
