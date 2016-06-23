<?php

namespace App\Http\Middleware;

use Closure;

class CustomMiddleware
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
        if (!$request->input('age') && $request->path() != "home")
        {
            return redirect('basico/formulario');
        }
        return $next($request);
    }
}
