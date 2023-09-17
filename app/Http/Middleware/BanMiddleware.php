<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class BanMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    
    {
    //    dd(auth()->user()->is_ban);
    //    if(auth()->user()->is_ban == 0){
    //       dd('admin');
    //     }else{
    //        dd('user');
    //    }
    
        if(auth()->user())
        { if(auth()->user()->is_ban == 1){
            Auth::logout();
            return redirect()->route('login');
        }
        return $next($request);
    }
       
    }
}
