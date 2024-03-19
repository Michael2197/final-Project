<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()){
            if(auth()->user()->role =='admin'){
                return $next($request);
            }elseif(auth()->user()->rolr =='user'){

                return response('You are not allowed to access this page');

            }else{
                return redirect()->route('home');
            }

        }else{
            return response('log in first',redirect()->route('login'));
        }

    }
}
