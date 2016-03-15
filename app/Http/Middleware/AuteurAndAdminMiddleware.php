<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AuteurAndAdminMiddleware
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
        //dd(!Auth::check());
        if( !Auth::check()|| Auth::user()->admin != 1){
            return redirect()->route('articles.index');
        }
        return $next($request);
    }
}
