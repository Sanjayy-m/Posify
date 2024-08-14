<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //return $next($request);
        if(!Auth::check()){
            return redirect()->route('login');
        }

        $userRole=Auth::user()->role;
        if($userRole==2){
            return $next($request);
        }
        if($userRole==3){
            return redirect()->route('dashboard');
        }
        if($userRole==1){
            return redirect()->route('superadmin');
        }
        session()->flash('You are not authorized to access this page as admin.');
    }
}
