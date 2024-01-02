<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role == 'Admin'){
            if(auth()->user()){
                return $next($request);
            }
        }else{
            return redirect()->back()->withErrors('kamu tidak punya akses admin');
        }
    }
}