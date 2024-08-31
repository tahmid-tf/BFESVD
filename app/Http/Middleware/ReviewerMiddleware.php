<?php

namespace App\Http\Middleware;

use Closure;

class ReviewerMiddleware
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
        if (auth()->user()->role === 'reviewer'){
            return $next($request);
        }else{
            abort( response()->json('Unauthorized Entry', 401) );
        }
    }
}
