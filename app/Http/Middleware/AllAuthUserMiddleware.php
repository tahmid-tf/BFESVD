<?php

namespace App\Http\Middleware;

use Closure;

class AllAuthUserMiddleware
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
        if (auth()->user()->role === 'reviewer' || auth()->user()->role === 'super-admin' || auth()->user()->role === 'user' || auth()->user()->role === 'admin'){
            return $next($request);
        }else{
            abort( response()->json('Unauthorized Entry', 401) );
        }

    }
}
