<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class LessonMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        dd(Auth::guard('lesson')->user());

        return $next($request);

    }

}
