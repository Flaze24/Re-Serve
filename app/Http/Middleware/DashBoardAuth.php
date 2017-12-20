<?php

namespace App\Http\Middleware;

use Closure;

class DashBoardAuth
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
        if ($request->user()->user_type != '2'||$request->user()->user_type != '3')
        {
            return redirect('dashboard.index');
        }

        return $next($request);
    }
}
