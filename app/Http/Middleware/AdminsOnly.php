<?php

namespace App\Http\Middleware;

use Illuminate\Http\Response;

use Closure;
use Illuminate\Http\Request;

class AdminsOnly
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
        if (auth()->user()?->username !== 'GilvinAdmin')
        {
            abort(Response::HTTP_FORBIDDEN);
        }


        return $next($request);
    }
}
