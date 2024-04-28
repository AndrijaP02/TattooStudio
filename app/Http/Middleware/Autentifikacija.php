<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class Autentifikacija
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $role = Auth::user()->role;
    
            if ($role === 'admin') {
               
                if (Gate::allows('isAdmin')) {
                    return $next($request);
                }
            } elseif ($role === 'manager') {
                
                if (Gate::allows('isManager')) {
                    return $next($request);
                }
            } elseif($role === 'user'){
                if (Gate::allows('isUser')) {
                    return $next($request);
                }
            }    
            return redirect()->route('index')->with('error', 'Nemoguć pristup ako niste ulogovani!');
        } else {
            return redirect()->route('login')->with('error', 'Nemate prava pristupa');
        }
    }
}
