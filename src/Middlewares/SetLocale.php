<?php

namespace NeelBhanushali\LaravelLocale\Middleware;

use Closure;

class SetLocale
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
        $locale = $request->header('x-locale') ? $request->header('x-locale') : config('app.fallback_locale');
        app()->setLocale($locale);
        return $next($request);
    }
}
