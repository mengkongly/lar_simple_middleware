<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class IsAdminMiddleware
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


        $user   =   Auth::user();        
        // $user   =   $request->user();
        if(!Auth::check() || !$user->isAdmin('Administrator')){
            return redirect('/');
            //return "Administrator";
        }
        return $next($request);
    }
}
