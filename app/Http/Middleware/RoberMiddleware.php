<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoberMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        abort_if($request->input('name') == 'Rober', 403 , 'Rober is not allowed to handle this request');
        return $next($request);
    }
}
