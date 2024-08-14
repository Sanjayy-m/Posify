<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Normal
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        $userRole=Auth::user()->role;

        if($userRole==3){
            return $next($request);
        }

        // session()->flash('error', 'You are not authorized to access this page as admin.');
        // return redirect('/');
        if($userRole==2){
            return redirect()->route('admin');
        }
        if($userRole==1){
            return redirect()->route('superadmin');
        }
        session()->flash('You are not authorized to access this page as admin.');
    }
}
